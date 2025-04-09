# 🔥 Projeto Completo: Flutter + Laravel + Firebase (Multi Ambientes + CI/CD)

Este projeto entrega uma aplicação de ponta a ponta com:

- 🧠 Backend em Laravel
- 📱 Frontend em Flutter
- 🔐 Autenticação com Firebase
- 🐳 Docker multi-ambiente
- 🚀 GitHub Actions CI/CD
- 📦 Seeders, testes, factories e build.sh

---

## 🗂️ Estrutura de Pastas

```
backend_laravel/
├── app/Http/Controllers, Middleware
├── Models, Policies, Services
├── config/firebase.php, cors.php ✅
├── database/migrations, seeders, factories ✅
├── routes/api.php

frontend_flutter/
├── lib/modules, services, main.dart
├── firebase_options.dart ✅
├── pubspec.yaml ✅

.github/workflows/
├── laravel-ci.yml
├── flutter-ci.yml

Ambientes:
├── .env.example
├── .env.hml
├── .env.prod
├── docker-compose.yml / .hml.yml
├── Dockerfile / Dockerfile.flutter
├── Makefile / startup.sh / build.sh ✅
```

---

## ✅ Setup Completo

```bash
chmod +x build.sh
./build.sh
```

---

## 🧪 Testes

```bash
cd backend_laravel
php artisan test
```

---

## 👨‍💻 Autor

Thiago Pantoja | #Architect
