.read ../create.sql
.separator |
.import ../categorie.txt categorie
.import ../article.txt article
SELECT * from article;
SELECT * from categorie;
