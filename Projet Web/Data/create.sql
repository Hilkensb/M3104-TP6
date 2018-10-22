CREATE TABLE article (
	ref INTEGER PRIMARY KEY,
	nom TEXT,
	caracteristique TEXT,
	prix REAL,
	photo TEXT,
	categorie INTEGER,
	marque TEXT,
	description TEXT,
	FOREIGN KEY(categorie) REFERENCES categorie(ref)
);

CREATE TABLE categorie(
	ref INTEGER PRIMARY KEY,
	nom TEXT,
	photo TEXT
);
