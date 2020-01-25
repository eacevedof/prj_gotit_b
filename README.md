# prj_gotit_b
Api rest backend

# comandos:
```js
//entidad
php bin/console doctrine:mapping:import App\\Entity annotation --path=src/Entity

//aplicar este valor a las entidades (@python)
* @ORM\Entity(repositoryClass="App\Repository\<EntityName>Repository)

//setters y getters
php bin/console make:entity --regenerate

//controlador
php bin/console make:controller AppArrayController

//cache
php bin/console cache:clear -e prod

//formulario
php bin/console make:form

```

# notas
- src/Services no se puede llamar así, debe ser Service sino crea un conflicto