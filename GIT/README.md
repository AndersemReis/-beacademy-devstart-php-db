
Comandos usados no git

Descrição dos comandos e descrições para uso no Git e Github


## Autores

- [@AndersemReis](https://github.com/AndersemReis/beacademy-devstart-gitegithub.git)


## Comando e descrições

- git config --global user.name "<nome>"  - configuração inicial do  usuário
- git config --global user.email "<email>" - configuração do email de usuário
- git init  - inicia um repositório vazio ou inicializa um existente
- git status - mostrar o status atual do trabalho em andamento no git
- git add <arquivo> - incluir uma alteração realizada nos trabalhos em andamento
- git add . - incluí todas as alterações dos trabalhos em andamento
- git commit -m <comentario> - registra a alteração iniciada pelo comando "add"
- git log - mostra as informações dos commits realizados
- git rm --cached <arquivo> - remove uma alteração executada com o comando "add"
- git branch - mostra as branch's existentes
- git branch <nome da branch> - cria uma versão (branch)
- git branch -d <nome da branch> - deleta a branch informada
- git checkout <nome da branch> - navega entre as branch's existentes
- git checkout -b <nome da branch> - cria e muda para a branch criada no comando
- git merge <nome da branch a ser importada> -  comando para unifica as branch's
- git clone <chave SSH> - clona um repositório remoto para a sua máquina
- git remote -v - mostra o repositório de origem
- git push - envia as alterações para o repositório remoto
- git stash –include-untracked - salva alterações sem realizar o commit
- git stash list - lista stashes criadas
- git stash pop - restaura alterações salvas
- git stash pop stash@{1} - aplica stash a um estágio especifico
- git revert <4 primeiros dígitos do hash do commit> - revert as alterações de um commit e gera um novo commit novo
- git pull - atualiza as branch's locais de acordo com o conteúdo remoto

