import sys

file_path = 'c:/laragon/www/siwawancara/resources/views/penilaian/index.blade.php'
try:
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()
    
    content = content.replace('<span class="me-1 opacity-7">T:</span>', '<span class="me-1 opacity-7">Total:</span>')
    content = content.replace('<span class="me-1 opacity-7">S:</span>', '<span class="me-1 opacity-7">Sudah:</span>')
    content = content.replace('<span class="me-1 opacity-7">B:</span>', '<span class="me-1 opacity-7">Belum:</span>')

    with open(file_path, 'w', encoding='utf-8') as f:
        f.write(content)
        
    print('Done replacing initials with full words.')
except Exception as e:
    print('Error:', e)
