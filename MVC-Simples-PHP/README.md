# MVC Simples PHP

Já viu o projeto Crud Simples PHP?
NÃO, então acesse aqui, [CRUD](../CRUD-Simples-PHP)
SIM, então agora vamos subir o nível 👨‍💻🔥
Mini framework MVC com PDO:
```
 ├── /Application
 │   ├── /Controllers
 │   ├── /Models
 │   ├── /Views
 │
 ├── /Public
 │   ├── index.php
 │   ├── .htaccess
 │
 ├── /config
 │   └── database.php
 │
 ├── .htaccess
```

🔧 1. .htaccess (RAIZ)
Redireciona tudo para /Public

🔧 2. .htaccess (Public)

⚙️ 3. Config DB (config/database.php)

🚪 4. Front Controller (Public/index.php)

🧠 5. Model (Application/Models/Gasto.php)

🎮 6. Controller (Application/Controllers/GastosController.php)

🎨 7. View - Listagem (Application/Views/gastos/index.php)

✏️ 8. View - Editar (Application/Views/gastos/editar.php)

# ✅ Resultado final
- ✔ MVC organizado
- ✔ PDO (seguro com prepared statements)
- ✔ Rotas amigáveis (via .htaccess)
- ✔ Separação clara (Model / View / Controller)
