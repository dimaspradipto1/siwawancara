import sys

files = [
    'c:/laragon/www/siwawancara/resources/views/penilaian/index.blade.php',
    'c:/laragon/www/siwawancara/resources/views/mahasiswa/index.blade.php'
]

for file_path in files:
    try:
        with open(file_path, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # Replace the dropdown div and button
        old_str = '<div class="dropdown">\n                            <button class="btn btn-dark text-white text-uppercase d-flex align-items-center gap-2"'
        new_str = '<div class="dropdown w-100 w-md-auto">\n                            <button class="btn btn-dark text-white text-uppercase d-flex align-items-center justify-content-center gap-2 w-100 w-md-auto"'
        
        content = content.replace(old_str, new_str)
        
        with open(file_path, 'w', encoding='utf-8') as f:
            f.write(content)
            
        print(f'Done replacing in {file_path}')
    except Exception as e:
        print('Error:', e)
