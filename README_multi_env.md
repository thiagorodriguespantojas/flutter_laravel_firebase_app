# 🌐 Documentação Multi-Ambiente (DEV / HML / PROD)

Este projeto suporta múltiplos ambientes com variações de configuração.

---

## 📁 Estrutura Recomendada

```
.env
.env.hml
.env.prod

docker-compose.yml
docker-compose.hml.yml
docker-compose.prod.yml
```

---

## 🚀 Comandos

### Ambiente DEV:
```bash
cp .env.example .env
docker-compose up -d
```

### Ambiente HML:
```bash
cp .env.hml .env
docker-compose -f docker-compose.hml.yml up -d
```

---

## ☁️ Deploy Contínuo - Exemplos

### Amazon EC2
- Conecte via SSH e clone o repositório
- Configure ambiente com `.env.prod`
- Use PM2, Nginx ou supervisord para manter app ativo
- Use GitHub Actions ou GitHub Deploy Keys para automatizar

### Azure Web App for Linux
- Use a imagem Docker personalizada com o Dockerfile
- Configure envs diretamente pelo painel Azure
- Habilite deploy contínuo via GitHub

### Render.com
- Crie novo serviço (Web Service)
- Selecione Dockerfile
- Configure as variáveis `.env.prod`
- Deploy automático a cada push na branch principal

---

## ✅ Boas práticas

- Nunca versionar `.env` com dados reais
- Usar repositórios secretos ou GitHub Secrets em CI/CD
- Monitorar com Prometheus + Grafana, ou Sentry

