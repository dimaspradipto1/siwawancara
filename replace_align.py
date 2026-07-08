import sys

file_path = 'c:/laragon/www/siwawancara/resources/views/penilaian/create.blade.php'
try:
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # 1. Rata kiri untuk "penilaian wawancara"
    content = content.replace('<h3 class="text-center text-uppercase text-bold">penilaian wawancara</h3>',
                              '<h3 class="text-start text-uppercase text-bold">penilaian wawancara</h3>')

    # Rata kiri untuk "Silahkan isi nilai..." (BS5 uses text-start)
    content = content.replace('<p class="text-left text-capitalize text-bold text-uis-green">Silahkan isi nilai sesuai',
                              '<p class="text-start text-capitalize text-bold text-uis-green">Silahkan isi nilai sesuai')

    # 2. Rata kiri kanan (justify) untuk teks indikator
    content = content.replace('<p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">',
                              '<p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3" style="text-align: justify;">')

    with open(file_path, 'w', encoding='utf-8') as f:
        f.write(content)

    print('Successfully updated create.blade.php text alignments.')
except Exception as e:
    print('Error:', e)
