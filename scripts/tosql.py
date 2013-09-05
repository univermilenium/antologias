import glob

def getfiles(pattern):
    return glob.glob(pattern)

def printlistfiles(pattern):
    files = getfiles(pattern)
    for file in files:
        filename = file.split("/")[-1];
        print "INSERT INTO documentos (id_lic, grado, materia, clave, autor, ruta) VALUES (1, 'GRADO', 'PEDAGOGIA', 'CLAVEDPEDAGOGIA', 'autor', '/pedagogia/%s');" % filename

if __name__ == "__main__":
    printlistfiles("/home/moises/apps/repos/antologias/files/pedagogia/*.pdf")
