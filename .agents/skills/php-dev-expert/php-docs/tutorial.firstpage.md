# Sua primeira página PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tutorial.firstpage.php

---

# Sua primeira página PHP

Este tutorial assume que o PHP já está instalado.
Instruções de instalação podem ser encontradas na
[» página de download](https://www.php.net/downloads.php).

Crie um novo arquivo chamado hello.php
com o seguinte conteúdo:

**Exemplo #1 Nosso primeiro script PHP: hello.php**

```
<?php

echo "Olá, Mundo!";

?>
```

Usando o terminal, navegue até o diretório contendo este arquivo e
inicie o servidor de desenvolvimento com o seguinte comando:

```
php -S localhost:8000
```

Use um navegador para acessar o arquivo com a URL do servidor web, terminando
com a referência ao arquivo `/hello.php`.
De acordo com o último comando executado, a URL será
`http://localhost:8000/hello.php`.
Se tudo estiver configurado corretamente, este arquivo será interpretado pelo PHP
e a mensagem "Olá, Mundo!" será mostrada no navegador.

O PHP pode ser incorporado em uma página HTML normal. Isso significa que dentro do documento HTML
podem ser escritas as instruções PHP, conforme demonstrado no exemplo a seguir:

```
<!DOCTYPE html>
<html>
    <head>
        <title>Teste PHP</title>
    </head>
    <body>
        <?php echo '<p>Olá, Mundo!</p>'; ?>
    </body>
</html>
```

Isto resultará na seguinte saída:

```
<!DOCTYPE html>
<html>
    <head>
        <title>Teste PHP</title>
    </head>
    <body>
        <p>Olá, Mundo!</p>
    </body>
</html>
```

Este programa é realmente simples e você não precisa do
PHP para criar uma página assim (fixa). Tudo o que ela faz é mostrar:
`Olá, Mundo!` utilizando a instrução [echo](function.echo.md).
Note que o arquivo *não precisa ser executável*
ou especial. O servidor web descobre que este arquivo precisa ser interpretado
pelo PHP por causa da extensão ".php", que o servidor é configurado
para repassar ao PHP. Pense nisso como um arquivo HTML normal que por acaso possui
um conjunto de etiquetas especiais disponíveis para você fazer muitas coisas interessantes.

O objetivo do exemplo é mostrar o formato especial das etiquetas do PHP.
Neste exemplo nós usamos `<?php` para indicar que
a partir daquele ponto entramos no modo PHP. Então nós colocamos a instrução do PHP e saímos do modo PHP
adicionando a etiqueta de fechamento, `?>`. Você pode entrar
e sair do modo PHP num arquivo HTML desta maneira em qualquer lugar que você queira. Para mais
detalhes, leia a seção do manual que fala da [sintaxe básica do PHP](language.basic-syntax.md).

> **Nota**:
> **Uma Nota sobre Fins de linha**  
>
> Fins de linha têm pouco significado no HTML, entretanto ainda é uma boa idéia
> fazer o seu HTML ter uma boa aparência e organização através da divisão em linhas. Um
> fim de linha imediatamente após a etiqueta de fechamento
> `?>` será removido pelo PHP. Isso pode ser extremamente
> útil quando você está juntando vários blocos de PHP ou arquivos incluídos
> contendo apenas PHP que não deveriam imprimir nada no processo. Ao mesmo tempo
> isso pode ser um pouco confuso. Você pode colocar um espaço depois da tag de fechamento
> `?>` para forçar a impressão de um espaço e fim de linha
> ou você pode explicitamente imprimir o fim de linha com um último echo/print de dentro de
> seu bloco PHP.

> **Nota**:
> **Uma Nota sobre os Editores de Texto**  
>
> Há muitos editores de textos e Ambientes de Desenvolvimento Integrado (IDEs - Integrated Development Enviroments)
> que você pode usar para criar, editar e gerenciar arquivos PHP. Uma lista parcial
> destas ferramentas pode ser vista na [» Lista de Editores
> para PHP](https://en.wikipedia.org/wiki/List_of_PHP_editors). Se você gostaria de recomendar um editor, por favor visite a
> página acima e peça ao administrador da página para adicionar o editor à lista. Ter
> um editor que destaca a sintaxe das etiquetas pode ser muito útil.

> **Nota**:
> **Uma Nota sobre os Processadores de Texto**  
>
> Processadores de texto como o StarOffice Writer, Microsoft Word e Abiword não
> são boas escolhas para editar arquivos PHP. Se você deseja usar um desses para
> este script de teste, você precisa verificar se você está salvando o arquivo como *texto
> puro* ou o PHP não será capaz de ler e executar o script.

Agora que você criou com sucesso um script simples em PHP, é
hora de criar o mais famoso dos scripts PHP! Uma chamada à função
[phpinfo()](function.phpinfo.md) e você verá muitas
informações úteis sobre seu sistema e configurações como as
[Variáveis Predefinidas](language.variables.predefined.md) disponíveis,
módulos carregados pelo PHP, e as opções de [configuração](configuration.md).
Tire algum tempo para ver e revisar estas informações importantes.

**Exemplo #2 Como obter informações sobre o PHP**

```
<?php

phpinfo();

?>
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
