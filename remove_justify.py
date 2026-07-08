import sys

file_path = 'c:/laragon/www/siwawancara/resources/views/penilaian/create.blade.php'
try:
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Remove justify style and extra spaces
    content = content.replace(' style="text-align: justify;"', '')

    with open(file_path, 'w', encoding='utf-8') as f:
        f.write(content)

    print('Successfully removed text-align justify.')
except Exception as e:
    print('Error:', e)
