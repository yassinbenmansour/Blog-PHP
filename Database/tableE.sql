UPDATE ETUDIANT 
SET  niveaEtu = 'BAC+5'  WHERE  niveaEtu = 'Master' ,
SET  niveaEtu = 'BAC+4'  WHERE  niveaEtu = 'Bachelor' ,
SET  niveaEtu = 'Doctorat'  WHERE  niveaEtu = 'Phd' ;



UPDATE Formation
SET  titre = 'developement java' WHERE  id = 11 