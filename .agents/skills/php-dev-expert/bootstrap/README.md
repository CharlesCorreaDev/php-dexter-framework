# Documentação Oficial do Bootstrap por Versão (3.4, 4.6, 5.3 e 6.0)

Este diretório centraliza a documentação oficial completa do **Bootstrap** convertida para Markdown e separada por versão principal dentro da skill [`php-dev-expert`](../SKILL.md).

---

## Índice de Versões Disponíveis

| Versão | Diretório Local | Índice Mestre | Fonte Oficial |
| :--- | :--- | :--- | :--- |
| **Bootstrap 6.0** | [`6.0/`](6.0/) | [`6.0/_INDEX.md`](6.0/_INDEX.md) | https://getbootstrap.com/docs/6.0/ |
| **Bootstrap 5.3** | [`5.3/`](5.3/) | [`5.3/_INDEX.md`](5.3/_INDEX.md) | https://getbootstrap.com/docs/5.3/ |
| **Bootstrap 4.6** | [`4.6/`](4.6/) | [`4.6/_INDEX.md`](4.6/_INDEX.md) | https://getbootstrap.com/docs/4.6/ |
| **Bootstrap 3.4** | [`3.4/`](3.4/) | [`3.4/_INDEX.md`](3.4/_INDEX.md) | https://getbootstrap.com/docs/3.4/ |

---

## Principais Diferenças Entre Versões (Referência Rápida para Views PHP)

| Recurso | Bootstrap 3.4 | Bootstrap 4.6 | Bootstrap 5.3 | Bootstrap 6.0 |
| :--- | :--- | :--- | :--- | :--- |
| **Sistema de Grid** | `float` (4 tiers: `xs`, `sm`, `md`, `lg`) | **Flexbox** (5 tiers: `+xl`) | **Flexbox + CSS Grid** (6 tiers: `+xxl`) | **CSS Grid & Modern CSS** nativos |
| **Dependência JS** | **jQuery obrigatório** | **jQuery + Popper.js** | **Vanilla JS ES6+** (Sem jQuery) | **Vanilla JS Moderno / ESM** |
| **Pré-processador** | Less (e port Sass) | Sass (SCSS) | Sass + **CSS Custom Properties (`--bs-*`)** | CSS Moderno / CSS Variables nativas |
| **Dark Mode Nativo** | Não nativo | Não nativo | **Nativo** (`data-bs-theme="dark"`) | **Nativo** e aprimorado |
| **Atributos de Dados** | `data-toggle`, `data-target` | `data-toggle`, `data-target` | **`data-bs-toggle`**, **`data-bs-target`** | `data-bs-*` |
| **Margens Horizontais** | `pull-left` / `pull-right` | `ml-*` / `mr-*` | **`ms-*`** (*start*) / **`me-*`** (*end* — RTL ready) | `ms-*` / `me-*` (Logical Properties) |

