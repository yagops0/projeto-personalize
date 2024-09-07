# TUTORIAL GITHUB DESENVOLVIMENTO WEB
Yago Piovesan Salvador

## PASSOS

- Crie sua conta no github;
- Guarde seus dados;
- Crie um repositório;
- Após esses passos aparecerá uma aba explicando como inicar um repositório local e salvá-lo em um repositório remoto.

## NO SEU PC

- Instale o git através do site oficial;
- Após tê-lo configurado, abra a pasta do projeto que deseja salvar remotamente (Abrindo com sua IDE de preferência);
- Caso seja o VSCode, abra o terminal ou tecle o atalho CTRL + ';
- Com o terminal aberto, caso nao tenha criado o README do projeto no momento em que ele estava sendo criado, no terminal digite este comando: echo "# nome-do-projeto" >> README.md;
- Isto criará o arquivo README na pasta de seu projeto;
- Depois, inicie um repositório local com o comando: git init;
- Na aba da esquerda, onde fica os arquivos e pasta notará que os nomes mudaram a cor, isso indica que o projeto ainda não estava salvo localmente ou remotamente;

## Realizando o primeiro commit
- Depois de todas as etapas feitas, terá que adicionar os arquivos que deseja salvar;
- Você pode especificar o/os arquivo(s) que deseja ou simplesmente adicionar todas com o comando: git add .
- Após ter feito isso os arquivos na aba direita terão um "A" indicando que estão adicionados;
- Tudo pronto para o commit, no terminal digite: git commit -m "Alguma mensagem". Aperte ENTER
- Notará que os arquivos voltaram ao normal
- Isso quer dizer que já foram adicionados ao repositório local, mas ainda não no repositório remoto

## Subindo o repositório para o GITHUB
- caso seja a primeira vez que esteja fazendo isso, terá que escolher a "branch"(basicamente ramos do projeto, elas servem para se assegurar que a branch principal não será modificada)
- para definir a branch digite o comando: "git branch -M main" para a branch principal ou "git branch -M nome-da-branch" para outra branch
- pronto sua branch está definida;
- Antes de adicionar remotamente, sendo sua primeira vez, o git pedirá que digite seu usuário e sua senha, para acessar remotamente o usuário, esses são os dados que foram criados primeiramente, dito em cima.
- após isso o próprio git dará um comando para adicionar ele remotamente;
- este comando é: git remote add origin "aUrlDoSeuRepositório";
- o repositório local e o remoto já foram linkados;
- para adicionar o repositório local ao remoto, basta digitar: git push -u origin main
- pronto, agora só recarregar a página do repositório do github que está aberta