# prj_gotit_b
Api rest backend

# comandos:
```js
//entidad
php bin/console doctrine:mapping:import App\\Entity annotation --path=src/Entity

//aplicar este valor a las entidades (@python)
* @ORM\Entity(repositoryClass="App\Repository\<EntityName>Repository)

//setters y getters y generación de repositorios
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

# material de consulta
- https://www.youtube.com/watch?v=ROCuGK1M-XI&list=PLcLoUdtOOXL3URMZDynj_Qfpq6TIdclHI