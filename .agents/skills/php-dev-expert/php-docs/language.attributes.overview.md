# Visão geral dos atributos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.attributes.overview.php

---

## Visão geral dos atributos

(PHP 8)

Os atributos PHP fornecem metadados estruturados e legíveis por máquina para classes, métodos,
funções, parâmetros, propriedades e constantes. Eles podem ser inspecionados no momento da execução
por meio da [API Reflection](book.reflection.md), permitindo comportamento
dinâmico sem modificar o código. Os atributos fornecem uma maneira declarativa de anotar
código com metadados.

Atributos permitem o desacoplamento da implementação de um recurso de seu uso. Enquanto
interfaces definem estrutura ao impor métodos, atributos fornecem metadados em vários
elementos, incluindo métodos, funções, propriedades e constantes. Diferentemente de interfaces,
que impõem implementações de métodos, atributos anotam código sem alterar sua estrutura.

Atributos podem complementar ou substituir métodos de interface opcionais fornecendo metadados em vez de
estrutura imposta. Considere uma interface `ActionHandler` que representa uma
operação em um aplicativo. Algumas implementações podem exigir uma etapa de configuração, enquanto outras não.
Em vez de forçar todas as classes que implementam `ActionHandler` a definir um
método `setUp()`, um atributo pode indicar requisitos de configuração. Essa abordagem
aumenta a flexibilidade, permitindo que os atributos sejam aplicados várias vezes quando necessário.

**Exemplo #1 Implementando métodos opcionais de uma interface com Atributos**

```
<?php
interface ActionHandler
{
    public function execute();
}

#[Attribute]
class SetUp {}

class CopyFile implements ActionHandler
{
    public string $fileName;
    public string $targetDirectory;

    #[SetUp]
    public function fileExists()
    {
        if (!file_exists($this->fileName)) {
            throw new RuntimeException("Arquivo não existe");
        }
    }

    #[SetUp]
    public function targetDirectoryExists()
    {
        if (!file_exists($this->targetDirectory)) {
            mkdir($this->targetDirectory);
        } elseif (!is_dir($this->targetDirectory)) {
            throw new RuntimeException("Diretório de destino $this->targetDirectory não é um diretório");
        }
    }

    public function execute()
    {
        copy($this->fileName, $this->targetDirectory . '/' . basename($this->fileName));
    }
}

function executeAction(ActionHandler $actionHandler)
{
    $reflection = new ReflectionObject($actionHandler);

    foreach ($reflection->getMethods() as $method) {
        $attributes = $method->getAttributes(SetUp::class);

        if (count($attributes) > 0) {
            $methodName = $method->getName();

            $actionHandler->$methodName();
        }
    }

    $actionHandler->execute();
}

$copyAction = new CopyFile();
$copyAction->fileName = "/tmp/foo.jpg";
$copyAction->targetDirectory = "/home/user";

executeAction($copyAction);
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
