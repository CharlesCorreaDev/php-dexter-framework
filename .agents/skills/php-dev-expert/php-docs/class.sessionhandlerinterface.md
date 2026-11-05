# A classe SessionHandlerInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.sessionhandlerinterface.php

---

# A classe SessionHandlerInterface

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

## Introdução

**SessionHandlerInterface** é uma interface que define o protótipo
mínimo para criar um manipulador de sessão personalizado. Para passar um
manipulador de sessão personalizado para [session\_set\_save\_handler()](function.session-set-save-handler.md) usando
invocação OOP (Orientada à Objetos), a classe deve implementar esta interface.

Note que os métodos de callbacks desta classe são projetos para serem chamados internamente pelo
PHP e não para serem chamados pelo código do usuário.

## Resumo da Interface

interface ****SessionHandlerInterface**** {

/\* Métodos \*/

public function [close](sessionhandlerinterface.close.md)(): [bool](language.types.boolean.md)

public function [destroy](sessionhandlerinterface.destroy.md)([string](language.types.string.md) `$id`): [bool](language.types.boolean.md)

public function [gc](sessionhandlerinterface.gc.md)([int](language.types.integer.md) `$max_lifetime`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [open](sessionhandlerinterface.open.md)([string](language.types.string.md) `$path`, [string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [read](sessionhandlerinterface.read.md)([string](language.types.string.md) `$id`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [write](sessionhandlerinterface.write.md)([string](language.types.string.md) `$id`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

}

## Examples

**Exemplo #1
Exemplo usando **SessionHandlerInterface****

O exemplo a seguir fornece um armazenamento de sessão baseado em arquivos similar ao
manipulador de gravação padrão de sessões do PHP, `files`. Este
exemplo poderia facilmente ser estendido para cobrir armazenamento em banco de dados usando
o motor de banco de dados de sua preferência suportado pelo PHP.

Observe que é usado o protótipo orientado a objetos com [session\_set\_save\_handler()](function.session-set-save-handler.md) e
a função de encerramento (register\_shutdown) é registrada usando a opção de parâmetro da função. Isto é
geralmente aconselhável ao registrar objetos como manipuladores de gravação de sessão.

**Cuidado**

Por brevidade, este exemplo omite a validação de entrada. No entanto, o
parâmetros `$id` são, na verdade, valores fornecidos pelo usuário que
exigem validação e sanitização adequadas para evitar vulnerabilidades, como
problemas de passagem de caminho. *Portanto, não use este exemplo não modificado em
ambientes de produção.*

```
<?php
class MySessionHandler implements SessionHandlerInterface
{
    private $savePath;

    public function open($savePath, $sessionName): bool
    {
        $this->savePath = $savePath;
        if (!is_dir($this->savePath)) {
            mkdir($this->savePath, 0777);
        }

        return true;
    }

    public function close(): bool
    {
        return true;
    }

    #[\ReturnTypeWillChange]
    public function read($id)
    {
        return (string) @file_get_contents("$this->savePath/sess_$id");
    }

    public function write($id, $data): bool
    {
        return file_put_contents("$this->savePath/sess_$id", $data) === false ? false : true;
    }

    public function destroy($id): bool
    {
        $file = "$this->savePath/sess_$id";
        if (file_exists($file)) {
            unlink($file);
        }

        return true;
    }

    #[\ReturnTypeWillChange]
    public function gc($maxlifetime)
    {
        foreach (glob("$this->savePath/sess_*") as $file) {
            if (filemtime($file) + $maxlifetime < time() && file_exists($file)) {
                unlink($file);
            }
        }

        return true;
    }
}

$handler = new MySessionHandler();
session_set_save_handler($handler, true);
session_start();

// proceder para definir e recuperar valores pela chave de $_SESSION
```

## Índice

- [SessionHandlerInterface::close](sessionhandlerinterface.close.md) — Fecha a sessão
- [SessionHandlerInterface::destroy](sessionhandlerinterface.destroy.md) — Destrói uma sessão
- [SessionHandlerInterface::gc](sessionhandlerinterface.gc.md) — Remove sessões antigas
- [SessionHandlerInterface::open](sessionhandlerinterface.open.md) — Inicializa uma sessão
- [SessionHandlerInterface::read](sessionhandlerinterface.read.md) — Lê os dados de sessão
- [SessionHandlerInterface::write](sessionhandlerinterface.write.md) — Escreve os dados de sessão

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
