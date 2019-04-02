{
    "name": "agroviva/qualiproof-api",
    "description": "",
    "type": "library",
    "keywords": [
      "library", "php", "php7"
    ],
    "require": {
        "php": ">=5.6",
        "ext-soap": "*"
        
    },
    "suggest": {
		"ext-soap": "If you want to use the Qualiproof Gateway client you have to install the ext-soap driver."
	},
    "license": "MIT",
    "authors": [
        {
            "name": "Enver Morinaj",
            "email": "emorinaj@agroviva.de"
        }
    ],
    "autoload": {
      "psr-4": {
        "Qualiproof\\": "src/"
      }
    },
    "minimum-stability": "dev"
}