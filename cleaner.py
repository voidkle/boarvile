import re
import sys
import os

def remove_mixed_comments(input_path, output_path):
    try:
        with open(input_path, 'r', encoding='utf-8') as file:
            content = file.read()
    except FileNotFoundError:
        print(f"Error: File '{input_path}' tidak ditemukan.")
        return
    pattern = re.compile(
        r'('
        r'"(?:\\[\s\S]|[^"])*"|' 
        r"'(?:\\[\s\S]|[^'])*'"
        r')|('
        r'<!--[\s\S]*?-->|'    
        r'/\*[\s\S]*?\*/|' 
        r'//.*' 
        r')'
    )

    def replacer(match):
        if match.group(1) is not None:
            return match.group(1)
        return ""
    cleaned_content = pattern.sub(replacer, content)
    cleaned_content = re.sub(r'\n\s*\n', '\n', cleaned_content)
    with open(output_path, 'w', encoding='utf-8') as file:
        file.write(cleaned_content)
    
    print(f"✅ Sukses! File bersih telah disimpan di: {output_path}")

if __name__ == "__main__":
    if len(sys.argv) != 3:
        print("Cara penggunaan: python cleaner.py <file_input.php> <file_output.php>")
        sys.exit(1)

    input_file = sys.argv[1]
    output_file = sys.argv[2]
    
    remove_mixed_comments(input_file, output_file)