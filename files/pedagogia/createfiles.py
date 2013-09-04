import random

def createFile(file_name, content):
    file = open(file_name, 'w')
    file.write(content)
    file.close()

def files():
    words    = ['pedagogia', 'univer', 'elearning', 'toluca', 'online', 'rayon']
    word     = ''.join(random.choice(words) for _ in range(5))
    filename = "%s.txt" % word
    return filename

if __name__ == "__main__":
    for i in range(100):
      name = files()
      createFile(name, "Hola Mundo")

