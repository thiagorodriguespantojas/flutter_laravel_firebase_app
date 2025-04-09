# 📱 Flutter + Laravel + Firebase - App de Agendamentos

Projeto completo com frontend em Flutter, backend em Laravel e autenticação com Firebase.

---

## 📦 Tecnologias Utilizadas

- **Frontend:** Flutter 3.x, Firebase Auth
- **Backend:** Laravel 10+, Firebase Admin SDK
- **Banco de Dados:** MySQL
- **API RESTful protegida com token Firebase**

---

## 🚀 Instruções para Rodar Localmente

### 1. Clonar o repositório
```bash
git clone <repo>
cd flutter_laravel_firebase_app
```

### 2. Backend Laravel

#### Pré-requisitos:
- PHP 8.1+
- Composer
- MySQL
- Firebase JSON (veja abaixo)

#### Passos:
```bash
cd backend_laravel
composer install

cp .env.example .env
php artisan key:generate

# Configure .env com seu banco de dados e Firebase
php artisan migrate
php artisan serve
```

#### Firebase Auth:
1. Vá em [Firebase Console](https://console.firebase.google.com)
2. Crie projeto e ative Authentication (email/senha)
3. Vá em ⚙️ Configurações do Projeto > Contas de Serviço > Gere chave JSON
4. Salve como:
   ```
   storage/app/firebase/firebase_credentials.json
   ```
5. Edite `.env`:
   ```dotenv
   FIREBASE_CREDENTIALS=storage/app/firebase/firebase_credentials.json
   ```

---

### 3. Frontend Flutter
#### Pré-requisitos:
- Flutter SDK
- Firebase CLI (opcional)

#### Passos:
```bash
cd frontend_flutter
flutter pub get
flutter run
```

---

## 🐳 Docker (Opcional)

### docker-compose.yml
```yaml
version: '3.8'
services:
  app:
    build: .
    ports:
      - "8000:8000"
    volumes:
      - .:/var/www
    depends_on:
      - db
    command: php artisan serve --host=0.0.0.0 --port=8000

  db:
    image: mysql:8
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: agendamento
    ports:
      - "3306:3306"
```

---

## 🧪 Testes
- Acesse `/api/agendamentos` com token Firebase via Postman
- Use app Flutter para logar e consumir API

---

## 🧠 Autor
Thiago Pantoja - `@thiagorodriguespantoja`
- [LinkedIn](https://www.linkedin.com/in/thiagorpantoja