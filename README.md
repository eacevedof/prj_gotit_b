# prj_gotit_b
Api rest backend

# comandos:
```js
//entidad
php bin/console doctrine:mapping:import App\\Entity annotation --path=src/Entity

//setters y getters
php bin/console make:entity --regenerate App

//controlador
php bin/console make:controller AppArrayController

//cache
php bin/console cache:clear -e prod

//formulario
php bin/console make:form

```

# notas
- src/Services no se puede llamar así, debe ser Service sino crea un conflicto