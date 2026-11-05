# Passando o ID de sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/session.idpassing.php

---

## Passando o ID de sessão

Existem dois métodos para a propagação do id de sessão:

- Cookies
- URL parameter

O módulo de sessão suporta ambos os métodos. Cookies são melhores, mas
como nem sempre eles estão disponíveis, também é oferecido um método
alternativo. O segundo método embute o id de sessão diretamente nas URLs.

O PHP é capaz de transformar links de forma transparente. Se a opção
de tempo de execução `session.use_trans_sid` estiver habilitada,
URIs relativas serão alteradas automaticamente para conter o ID da sessão.
> **Nota**:
>
> O [arg\_separator.output](ini.core.md#ini.arg-separator.output),
> diretiva php.ini, permite configurar o separador de argumentos. Para completa
> conformidade com XHTML, especifique &amp; aqui.

Alternativamente, pode ser usada a constante **`SID`**, a qual é
definida se uma sessão é iniciada. Se o cliente não enviou um cookie de sessão
apropriado, a constante terá o formato `session_name=session_id`.
Se não, ela será uma string vazia. Dessa forma, ela pode ser colocada
incondicionalmente em URLs.

O exemplo a seguir demonstra como registrar uma variável e
como criar um link corretamente para outra página usando o **`SID`**.

**Exemplo #1 Contando o número de acessos de um único usuário**

```
<?php

session_start();

if (empty($_SESSION['count'])) {
   $_SESSION['count'] = 1;
} else {
   $_SESSION['count']++;
}
?>

<p>
Olá visitante, você acessou esta página <?php echo $_SESSION['count']; ?> vezes.
</p>

<p>
Para continuar, <a href="nextpage.php?<?php echo htmlspecialchars(SID); ?>">clique
aqui</a>.
</p>
```

A função [htmlspecialchars()](function.htmlspecialchars.md) pode ser usada ao mostrar o **`SID`**
com o intuito de prevenir ataques relacionados a XSS.

Mostrar o **`SID`**, como mostrado acima, não é necessário se
[--enable-trans-sid](session.configuration.md#ini.session.use-trans-sid) foi usado para compilar o PHP.

> **Nota**:
>
> Para URLs não-relativas, assume-se que elas apontam para sites externos e
> por isso não é adicionado o **`SID`**, já que seria um risco de segurança
> vazar o **`SID`** para um servidor diferente.

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
