
SELECT p.police, g.libelle_garantie FROM `police_valide_garantie` as p JOIN police_valide_garantie as pg JOIN garantie as g on g.id_garantie=pg.code_garantie
