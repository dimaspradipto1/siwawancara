const fs = require('fs');
const file = 'c:/laragon/www/siwawancara/resources/views/penilaian/create.blade.php';
let content = fs.readFileSync(file, 'utf8');

// 1. Fix Table Data Peserta
const tableRegex = /<table class="table mb-3">[\s\S]*?<tbody>([\s\S]*?)<\/tbody>[\s\S]*?<\/table>/;
content = content.replace(tableRegex, (match, tbody) => {
    let rows = tbody.match(/<tr>[\s\S]*?<\/tr>/g);
    if(!rows) return match;
    let newContent = rows.map(row => {
        let cols = row.match(/<td[^>]*>([\s\S]*?)<\/td>/g);
        if(!cols || cols.length < 2) return row;
        
        // Extract label
        let labelContent = cols[0].replace(/<td[^>]*>/, '').replace(/<\/td>/, '').trim();
        // Extract input
        let inputContent = cols[1].replace(/<td[^>]*>/, '').replace(/<\/td>/, '').trim();
        
        // Remove style width from label if any
        labelContent = labelContent.replace(/style="[^"]*"/, '');
        
        return `
                                    <div class="row mb-3 align-items-center">
                                        <div class="col-md-3 col-12 mb-2 mb-md-0">
                                            <label class="text-uppercase font-weight-bold mb-0">${labelContent}</label>
                                        </div>
                                        <div class="col-md-9 col-12">
                                            ${inputContent}
                                        </div>
                                    </div>`;
    }).join('\n');
    return '<div class="data-peserta-form">\n' + newContent + '\n                                    </div>';
});

// 2. Fix Indikator Penilaian
const indikatorRegex = /<div class="d-flex flex-grow-1">\s*<!-- Kolom kiri[^]*?<div class="flex-fill">([\s\S]*?)<\/div>\s*<!-- Kolom kanan[^]*?<div class="ms-3 text-end">([\s\S]*?)<\/div>\s*<\/div>/g;

content = content.replace(indikatorRegex, (match, leftCol, rightCol) => {
    let texts = [...leftCol.matchAll(/<p[^>]*>([\s\S]*?)<\/p>/g)].map(m => m[1].trim());
    let numbers = [...rightCol.matchAll(/<p[^>]*>([\s\S]*?)<\/p>/g)].map(m => m[1].trim());
    
    if(texts.length !== numbers.length) return match;
    
    let rows = texts.map((text, i) => {
        return `
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">${text}</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">${numbers[i]}</span>
                                                                    </div>`;
    }).join('');
    
    return `
                                                                <div class="w-100">
                                                                    <div class="d-flex justify-content-between border-bottom pb-2 mb-3">
                                                                        <h6 class="font-weight-bold text-uppercase text-danger mb-0">Indikator Penilaian:</h6>
                                                                        <h6 class="font-weight-bold text-danger text-uppercase mb-0 text-center" style="width: 80px;">bobot:</h6>
                                                                    </div>
                                                                    ${rows}
                                                                </div>`;
});

fs.writeFileSync(file, content, 'utf8');
console.log('Done modifying create.blade.php');
