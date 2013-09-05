import os
import unicodedata

def clean():
    [os.rename(f, strip_accents(f)) for f in os.listdir('.') if not f.startswith('.')]


def strip_accents(s):
    name = ''.join((c for c in unicodedata.normalize('NFD', s.decode('utf-8')) if unicodedata.category(c) != 'Mn')).replace(" ", "-").lower()
    return name

if __name__ == "__main__":
    clean()