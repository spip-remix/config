# Configuration

- [x] : import fichier historique `ecrire/inc/config.php`
- [x] : composerisation
- [x] : pluginisation

## Fichiers historiques

- `ecrire/inc/config.php`
- appels `inc/config`:
  - spip/spip:
  - plugins-dist:
  - contributions:

## Dépendances

### Constantes

### Globales

### Metas

### Config

### Fonctions

## Récup historique git

```bash
git clone --single-branch --no-tags git@git.spip.net:spip/spip.git config
cd config
git filter-repo \
  --path ecrire/inc/config.php \
  --path-rename ecrire/inc/config.php:inc/config.php \
  --force
git branch -m 5.0
```

## composer
