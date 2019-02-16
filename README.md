# /devdiary

<p align="center">
  <a href="http://localhost/devdiary/src/index.php"><img src="https://github.com/lemarcque/devdiary/blob/master/devdiary-test.gif" width="600" /><a/>
</p>

/devdiary est un journal de programmation - un enregistrement quotidien de faits, de décisions, de questions et de conversations entrepris dans le cadre du développement d'un logiciel. Il fonctionne simplement comme un référentiel d'informations qui n'est pas suffisamment structuré pour conserver les documents de conception officiels d'un projet.

## Todo
- Etalblir une procédure d'installation ainsi qu'un système de mise à jour automatiques
- Reactorisation du code HTML, CSS et PHP (Design pattern)
- Utilisation d'un système de version (e.g.: SemVer)
## Data storing
Pour des raisons de contraintes de temps, j'ai décidé de stocker les données dans un fichier .json afin de pouvoir rapidement débugger et visualiser les données sans passer par des tonnes d'outil.
```json
{
	"log" : {
		"14-2-2019": {
			"title" : "Lorem ipsum",
			"story" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu dui sed turpis maximus hendrerit quis at orci. Nam mauris neque, luctus id pulvinar a, dignissim eu ante. Sed bibendum faucibus bibendum. Phasellus vestibulum imperdiet ipsum, eu iaculis orci tempus et. Duis sit amet ultricies lorem, in venenatis ipsum. Etiam vulputate posuere pulvinar. Donec interdum ut ante non aliquam. Phasellus vel ex in mauris ornare venenatis. Sed eu pulvinar nisi, ut pharetra lectus. Integer vel erat sagittis, dignissim augue eu, maximus leo. Curabitur ultrices diam id fringilla finibus."
		},
		"15-2-2019": {
			"title" : "Programming in latin",
			"story" : "Etiam erat ipsum, laoreet quis semper in, pretium ac dui. Etiam sed eros sed velit efficitur gravida. Etiam porttitor, leo eget dapibus commodo, nisi dolor vestibulum sem, id vehicula dui lacus eget lectus. Integer nec quam ac ante bibendum scelerisque. Phasellus quis viverra magna. In hac habitasse platea dictumst. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec interdum risus pretium ultricies egestas. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."
		}
	}
}
```

## Authors
Henoc Sese - [lemarcque](https://github.com/lemarcque)
