# Yousign Component
Uitlisation de Yousign Component:
* Ajouter le dépôt du composant dans composer.json
```
    "repositories": [
        {
            "type": "vcs",
            "url": "https://gitlab.orientation-web.com/accessap/yousign-component.git"
        }
    ],
    "require": {
        ...
```
* Ajouter le composant dans le vendor
```
composer require accessap/yousign-component
```
*   Ajouter les variables d'environnements dans le fichier .env
```
YOUSIGN_API_BASE_URL="https://api.yousign.com"
YOUSIGN_BEARER_KEY=
```
*   Ajouter le fichier de configuration : config/packages/yousign.yaml
```
yousign:
  endpoint:
    files: '%env(YOUSIGN_API_BASE_URL)%/files'
    procedures: '%env(YOUSIGN_API_BASE_URL)%/procedures'
    signature_uis: '%env(YOUSIGN_API_BASE_URL)%/signature_uis'
  api_token: '%env(YOUSIGN_BEARER_KEY)%'
```

*   Modifier services.yaml
```
services:
    ...
    # YouSign API Configurations
    Accessap\YousignComponent\:
        resource: "../vendor/accessap/yousign-component/src/"
```
* Vérifier si IbanBundle est activé dans Bundles.php ( Le bundle est activé automatiquement pour les applications qui utilisent Symfony Flex )
```
Accessap\YousignComponent\YousignBundle::class => ['all' => true],

