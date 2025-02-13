# Clínica
Originalmente um projeto para a disciplina de Banco de dados na UENF, esse projeto está sendo atualizado e melhorado para a disciplina de Infraestrutura na nuvem com AWS do IFF.

Esse app utiliza docker, que administra uma stack composta por: PHP, MySQL, Apache e PHPmyAdmin; Além de Html estilizado com o framework picoCSS.

## Instruções
### Requisitos:
é necessário possuir o docker instalado.

### Execução:
basta utilizar ```docker compose up``` para que as dependências necessárias sejam instaladas a partir dos arquivos de configuração, e os containerês sejam criados e executados.

O app será acessado no endereço ```localhost:80```

PHPmyAdmin pode ser acessado no endereço ```localhost:8080```, com user: ```user``` e password: ```password```

# To-Do:
Mover credenciais para variáveis de ambiente (fora do ```docker-compose.yaml```)
