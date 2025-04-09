# 📱 Flutter + Docker - Build Automatizado

Este projeto permite compilar apps Flutter usando Docker, ideal para CI/CD ou ambientes locais isolados.

---

## ✅ Pré-requisitos

- Docker instalado
- Estrutura do projeto Flutter em `frontend_flutter/`
- Dockerfile específico para Flutter (`Dockerfile.flutter`)

---

## 🐳 Como usar

### Build manual via Docker

```bash
cd frontend_flutter
docker build -f ../Dockerfile.flutter -t flutter-builder .
docker run --rm -v $PWD:/app flutter-builder
```

O APK será gerado em:
```
frontend_flutter/build/app/outputs/flutter-apk/app-release.apk
```

---

## 🚀 Automatizando com CI/CD

Você pode incluir este build em um pipeline GitHub Actions:

```yaml
name: Flutter CI

on:
  push:
    paths:
      - "frontend_flutter/**"

jobs:
  build:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v3
      - name: Build APK via Docker
        run: |
          docker build -f Dockerfile.flutter -t flutter-builder .
          docker run --rm -v $(pwd)/frontend_flutter:/app flutter-builder
```

---

## 👨‍💻 Autor

Thiago Pantoja  
Arquiteto de Soluções | Flutter | Laravel | Firebase | #Architect
