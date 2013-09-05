import glob

def getfiles(pattern):
    return glob.glob(pattern)

def printlistfiles(pattern, carrera, cuatrimestre, materia, directorio):
    files = getfiles(pattern)
    for file in files:
        filename      = file.split("/")[-1];
        cveasignatura = filename.split("-")[-1].split(".")[-2]
        print "INSERT INTO `documentos` (`CARRERA`, `GRADO`, `MATERIA`, `CLAVE`, `AUTOR`, `RUTA`) VALUES ('{0}', '{1}', '{2}', '{3}', 'NOAUTOR', '/{4}/{1}/{5}');".format(carrera, cuatrimestre, materia, cveasignatura, directorio, filename)

if __name__ == "__main__":

	#criminologia 1
    printlistfiles("/home/moises/apps/repos/antologias/files/criminologia/1/*.pdf", "CRIMINOLOGIA", "1", "NONOMBREMATERIA", "criminologia")

	#criminologia 2
    printlistfiles("/home/moises/apps/repos/antologias/files/criminologia/2/*.pdf", "CRIMINOLOGIA", "2", "NONOMBREMATERIA", "criminologia")

	#derecho 1
    printlistfiles("/home/moises/apps/repos/antologias/files/derecho/1/*.pdf", "DERECHO", "1", "NONOMBREMATERIA", "derecho")

	#derecho 10
    printlistfiles("/home/moises/apps/repos/antologias/files/derecho/10/*.pdf", "DERECHO", "10", "NONOMBREMATERIA", "derecho")

	#derecho 4
    printlistfiles("/home/moises/apps/repos/antologias/files/derecho/4/*.pdf", "DERECHO", "4", "NONOMBREMATERIA", "derecho")

	#derecho 9
    printlistfiles("/home/moises/apps/repos/antologias/files/derecho/9/*.pdf", "DERECHO", "9", "NONOMBREMATERIA", "derecho") 

	#pedagogia 1
    printlistfiles("/home/moises/apps/repos/antologias/files/pedagogia/1/*.pdf", "PEDAGOGIA", "1", "NONOMBREMATERIA", "pedagogia") 

	#psicologia 1
    printlistfiles("/home/moises/apps/repos/antologias/files/psicologia/1/*.pdf", "PSICOLOGIA", "1", "NONOMBREMATERIA", "psicologia")                    

	#psicologia 4
    printlistfiles("/home/moises/apps/repos/antologias/files/psicologia/1/*.pdf", "PSICOLOGIA", "1", "NONOMBREMATERIA", "psicologia")                    

	#psicologia 7
    printlistfiles("/home/moises/apps/repos/antologias/files/psicologia/7/*.pdf", "PSICOLOGIA", "7", "NONOMBREMATERIA", "psicologia")                    

	#psicologia 10
    printlistfiles("/home/moises/apps/repos/antologias/files/psicologia/10/*.pdf", "PSICOLOGIA", "10", "NONOMBREMATERIA", "psicologia")                                