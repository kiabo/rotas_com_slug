# Rotas Slug encadeadas

## Descrição
Objetivo é testar como funcionariam as rotas com slug encadeadas, ou seja, rotas que dependem de outras rotas para serem acessadas.

Exemplo: 
```
http://127.0.0.1:8000/brasilia/
http://127.0.0.1:8000/brasilia/produto-01/
http://127.0.0.1:8000/brasilia/produto-02/

http://127.0.0.1:8000/sao-paulo/
http://127.0.0.1:8000/sao-paulo/produto-03/
http://127.0.0.1:8000/sao-paulo/produto-04/
```

## Como rodar
1. Clone o repositório
2. Entre na pasta do projeto
3. Configure o SQLite
4. Install o composer: 
```bash
    composer install
```
5. Instale as dependências do NPM:
```bash
    npm install
```

6. Rode a migration com seed:
```bash
    php artisan migration:fresh --seed
```

7. Rode o servidor:
```bash
    php artisan serve
```
8. Rode o NPM:
```bash
    npm run dev
```
9. Acesse a rota:
```bash
    http://127.0.0.1:8000
```




