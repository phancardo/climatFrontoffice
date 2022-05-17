create table actus(
    id int not null primary key auto_increment,
    daty date,
    titre text,
    resume text,
    Contenu text,
    url varchar(255),
    image varchar(200)
); 

insert into actus values(null,now(),
    'Pourquoi le changement climatique et la guerre en Ukraine sont lies',
    '"Le changement climatique et les conflits ont les memes racines : les combustibles fossiles".
    C est ce qu a declare la meteorologue et membre du GIEC ukrainienne Svitlana Romanko en pleine invasion russe.
    Plusieurs ONG denoncent en effet une "machine de guerre" alimentee par les industries fossiles alors que 36 % des recettes de
    letat russe proviennent des exportations de gaz et de petrole.',
    'En pleine guerre en Ukraine, il semble difficile pour les medias de faire de la place a l actualite climatique. Elles sont pourtant liees.
    C est en tout cas ce que soutient Svitlana Krakoska, meteorologue ukrainienne et membre du Giec. Dans une reunion video du groupe d experts internationaux, la specialiste a declare :
    "L argent qui finance cette agression (russe en Ukraine, NDR) est directement lie au changement climatique puisque cet argent vient des energies fossiles, petrole et gaz. Si nous ne dependions pas de ces energies,
    la Russie n aurait pas les moyens d entreprendre cette guerre", a-t-elle ajoute.',
    'Pourquoi-le-changement-climatique-et-la-guerre-en-Ukraine-sont-lies',
    'images/thumbs/guerre.jpg'
);

insert into actus values(null,now(),
    'Pakistan, mexique, egypte... , le monde suffoque sous des temperatures extremes',
    '+51 C au Pakistan, +48 C au Mexique, +46 C en egypte. Partout dans le monde, des temperatures historiques sont enregistrees, menacant la sante humaine, l approvisionnement en eau,
     les recoltes futures et meme la biodiversite, qui ne resiste pas a une chaleur si accablante.
     Du cote de l Hexagone, un "dome de chaleur" devrait s abattre sur le Sud-Ouest cette semaine alors que le pays subit deja une secheresse historique. ',
    'Ce fut un repit de courte duree. Apres plusieurs jours d accalmie relative, avec des temperatures retombees sous la barre des 35 C, l Asie du Sud a connu un nouveau pic vendredi 13 mai. Au Pakistan,
     certains endroits ont atteint les 50 C. Le mercure a meme grimpe a 51 C a l ombre, a Jacobabad, explosant le record de la temperature la plus elevee au monde en 2022.
      Et cette fournaise pourrait encore perdurer selon le Service meteorologie du Pakistan (PMD).',
    'Pakistan-mexique-egypte-le-monde-suffoque-sous-des-temperatures-extremes',
    'images/thumbs/pakistan.jpg'
);


insert into actus values(null,now(),
    '',
    '',
    '',
    '',
    'guerremin.jpg',
    'guerre.jpg'
);

create table actu(
    id int not null primary key auto_increment ,
    date_post date,
    titre text,
    image text,
    description_image text,
    intro_contenu text,
    contenu text,
    url text
)
create table admin(
    id int not null primary key auto_increment,
    nom VARCHAR(200),
    mdp varchar(100)
)
insert into admin values(null,'jah',sha1('123'));
create table sary(
    actu int,
    sary varchar(50)
)
insert into actus values(null,now(),'Production denergie est l une des causes de la  rechauffement climatique ',

    'Une grande partie des emissions mondiales de gaz a effet de serre provient de l utilisation de combustibles fossiles  tels que le charbon, le petrole et le gaz naturel  pour produire de l electricite et de la chaleur.',
    ' La production d electricite depend encore majoritairement des combustibles fossiles. Seul un quart de notre electricite provient de sources eoliennes, solaires et d autres sources renouvelables.',

    'Dans la quasi-totalite des regions terrestres, les journees tres chaudes et les vagues de chaleur se multiplient.
    Lannee 2020 a ete l une des plus chaudes jamais enregistrees. La hausse des temperatures provoque une augmentation des maladies liees a la chaleur et peut rendre le travail et les deplacements plus difficiles.
     En outre, les incendies de foret demarrent plus facilement et se propagent plus vite lorsque les temperatures sont plus elevees.',

    'Notre electricite et notre chauffage proviennent en grande partie du charbon, du petrole et du gaz. Il est possible de reduire sa consommation d energie en diminuant le chauffage et la climatisation,
     en optant pour des ampoules LED et des appareils electriques a faible consommation,
     en lavant son linge a l eau froide ou en le suspendant pour le faire secher au lieu d utiliser un seche-linge.',

    'rechauffement-climatique-production-energie',
    'actu.jpg');
insert into actus values(null,now(),'Production industrielle est l une des causes de la  rechauffement climatique ',

    'La production industrielle rejette des emissions de gaz, essentiellement du fait de son utilisation des combustibles fossiles',


    ' pour produire l energie necessaire a la fabrication de materiaux tels que le ciment, le fer, l acier, l electronique,
     le plastique et le textile, ainsi que d autres biens. L exploitation miniere et d autres processus industriels produisent egalement des emissions.',


    'De plus en plus de regions sont confrontees a une penurie d eau. Les secheresses peuvent provoquer des tempetes de sable et de poussiere destructrices, capables de deplacer des milliards de tonnes de sable a travers les continents.
     Avec la desertification, les terres cultivables voient egalement leur surface se reduire. Aujourd hui, de nombreuses personnes sont exposees au risque de manquer d eau.',


    'Partout dans le monde, les routes sont surchargees de vehicules, dont la plupart roulent au diesel ou a l essence.
     Privilegier la marche ou le velo a la voiture permet de reduire les emissions de gaz a effet de serre et contribue a une meilleure sante et a une meilleure forme physique.
     Pour les longues distances, pensez a prendre le train ou le car. Enfin, pratiquez le covoiturage chaque fois que cela est possible.',


    'rechauffement-climatique-production-industrielle',

    'cause.jpg');

insert into actus values(null,now(),'Deforestation est l une des causes de la  rechauffement climatique ',
    'La deforestation au profit d exploitations agricoles, de paturages ou autre, rejette egalement des emissions de gaz a effet de serre, puisque les arbres, lorsqu ils sont abattus, liberent le carbone qu ils ont stocke.',


    'La destruction des forets, qui absorbent le dioxyde de carbone, limite egalement la capacite de la nature a empecher les emissions de gaz d entrer dans l atmosphere.',


    '
    De plus en plus de regions sont confrontees a une penurie d eau. Les secheresses peuvent provoquer des tempetes de sable et de poussiere destructrices, capables de deplacer des milliards de tonnes de sable a travers les continents.
     Avec la desertification, les terres cultivables voient egalement leur surface se reduire. Aujourd hui, de nombreuses personnes sont exposees au risque de manquer d eau',

    'En consommant plus de legumes, de fruits, de cereales completes, de legumineuses, de noix et de graines, et moins de viande et de produits laitiers, on peut reduire considerablement son impact sur l environnement.
    La production d aliments d origine vegetale entraîne generalement moins d emissions de gaz a effet de serre et necessite moins d energie, de terres et d eau.',

    'rechauffement-climatique-deforestation',

    'effet.jpg');