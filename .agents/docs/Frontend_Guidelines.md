# Dexter Framework - Frontend & Design System Guidelines

Este documento descreve as especificações, arquitetura de assets e padrões visuais do frontend e do painel administrativo do Dexter Framework.

---

## 1. Painel Administrativo: Mantis Dashboard Bootstrap

O painel de controle e área administrativa do Dexter é baseado no **Mantis Free Bootstrap Admin Template**:
- **Repositório Base:** [codedthemes/mantis-free-bootstrap-admin-template](https://github.com/codedthemes/mantis-free-bootstrap-admin-template)
- **Figma UI Kit:** [Mantis Free Figma UI Kit](https://codedthemes.com/item/mantis-free-figma-ui-kit/)
- **Documentação Mantis:** [Mantis Bootstrap Docs](https://codedthemes.gitbook.io/mantis-bootstrap)
- **Catálogo de Componentes e Recursos:** [Bootstrap 5 Design Resources](https://github.com/jqueryscript/Bootstrap-5-Design-Resources)

### 🧹 Remoção de Dependências Desnecessárias
- O template foi enxugado: **todas as dependências extras e plugins pesados foram eliminados**, preservando apenas o **SASS/SCSS** para personalização e compilação enxuta do Bootstrap 5.3.

---

## 2. Paleta de Cores e Temas

O painel opera por padrão no modo **Light Theme**, substituindo o tom azul genérico pela paleta corporativa oficial ([Color Palette 90271](https://www.color-hex.com/color-palette/90271)):

| Cor | Hex | RGB | Papel / Aplicação |
|---|---|---|---|
| Fundo Canvas | `#F2F5F9` | `242, 245, 249` | Background da aplicação e cards claros |
| Borda / Divisores | `#B6C4E0` | `182, 196, 224` | Linhas de grid, divisores sutis |
| Acento Neutro | `#869DCC` | `134, 157, 204` | Bordas ativas, ícones secundários |
| **Terciary** | `#5772AC` | `87, 114, 172` | Cor terciária oficial do sistema |
| **Primary** | `#3B5998` | `59, 89, 152` | Cor primária oficial (ações principais, links, branding) |
| **Secondary** | `#224389` | `34, 67, 137` | Cor secundária oficial (sidebar, contrastes, foco) |
| Dark Blue | `#14306B` | `20, 48, 107` | Destaques escuros, hover de botões |
| Deep Navy | `#0C1C40` | `12, 28, 64` | Títulos, textos de alto contraste e cabeçalhos |

---

## 3. Arquitetura de Arquivos CSS/JS e Multi-Temas

A estrutura de estilos é estritamente modular e separada por responsabilidade:

```
frontend/assets/
├── css/
│   ├── bootstrap.css                 # Bootstrap 5.3 compilado e estável
│   ├── bootstrap-theme-custom.css    # Estilos customizados e componentes do Dexter
│   └── themes/                       # Variáveis de temas isoladas por pasta
│       ├── default/
│       │   └── Themes.css            # Variáveis CSS (:root) do tema padrão (Paleta 90271)
│       ├── midnight/
│       │   └── Themes.css            # Tema alternativo Midnight (futuro)
│       └── red-monza/
│           └── Themes.css            # Tema alternativo Red Monza (futuro)
├── js/
│   ├── bootstrap.js                  # Bootstrap Bundle JS
│   └── bootstrap-theme-custom.js     # Comportamentos JS customizados do Dexter / Mantis
└── scss/
    ├── _variables.scss               # Tokens SASS
    ├── _components.scss              # Regras completas de componentes e botões
    └── main.scss                     # Ponto de entrada de compilação
```

> **Regra de Ouro dos Temas:** O arquivo `Themes.css` de cada pasta (iniciando por `default/Themes.css`) define os valores das variáveis CSS globais (`--dx-primary`, `--dx-secondary`, `--dx-terciary`, etc.). O restante de todo o CSS e JS permanece 100% reutilizável e agnóstico ao tema selecionado.

---

## 4. Regra Mandatória de Variantes de Componentes

Ao criar qualquer classe utilitária, botão ou componente customizado (exemplo: `.btn-extra-*`, `.badge-custom-*`, `.card-*`), é **obrigatório gerar a suíte completa de variantes**:

### 1. Variantes Base:
- `*-primary`
- `*-secondary`
- `*-terciary`
- `*-danger`
- `*-info`
- `*-warning`
- `*-success`
- `*-light`
- `*-dark`

### 2. Variantes de Tonalidade (Tons Claros e Escuros):
- `*-primary-light`
- `*-primary-dark`
- `*-secondary-light`
- `*-secondary-dark`
- `*-terciary-light`
- `*-terciary-dark`

---

## 5. Exemplo de Implementação de Variáveis (`default/Themes.css`)

```css
:root {
  /* Paleta Base 90271 */
  --dx-canvas: #f2f5f9;
  --dx-border-light: #b6c4e0;
  --dx-accent: #869dcc;
  --dx-terciary: #5772ac;
  --dx-primary: #3b5998;
  --dx-secondary: #224389;
  --dx-navy: #14306b;
  --dx-dark-navy: #0c1c40;

  /* Variantes de Tonalidade */
  --dx-primary-light: #6282c0;
  --dx-primary-dark: #2a4170;
  --dx-secondary-light: #3d63b4;
  --dx-secondary-dark: #162d5e;
  --dx-terciary-light: #7c94c7;
  --dx-terciary-dark: #3f5583;

  /* Aplicação no Bootstrap */
  --bs-primary: var(--dx-primary);
  --bs-secondary: var(--dx-secondary);
  --bs-tertiary: var(--dx-terciary);
  --bs-body-bg: var(--dx-canvas);
  --bs-body-color: var(--dx-dark-navy);
}
```

---

## 6. Telemetria e Rastreamento de Eventos UI/UX (Analytics)

Todos os elementos interativos gerados (botões, modais, formulários, menus, links e filtros) devem ser declarados com suporte à captura de eventos de telemetria para ferramentas como **Google Analytics 4 (GA4)**, **Umami**, **Matomo**, **Plausible**, **PostHog** e **Mixpanel**.

### 6.1. Atributos Padrão no HTML / Twig (`data-dx-*`)
```html
<button type="button" 
        class="btn btn-primary"
        data-dx-event="click"
        data-dx-category="lead_generation"
        data-dx-action="solicitar_orcamento"
        data-dx-label="botao_topo_home"
        data-dx-value="100">
  Solicitar Orçamento
</button>
```

### 6.2. Documentações de Referência
- **Google Analytics 4:** [GA4 Recommended Events & gtag.js](https://developers.google.com/analytics/devguides/collection/ga4)
- **Umami:** [Umami Event Tracking Guide](https://umami.is/docs/track-events)
- **Matomo:** [Matomo JavaScript Tracking](https://developer.matomo.org/api-reference/tracking-javascript)
- **Plausible:** [Plausible Custom Events](https://plausible.io/docs/custom-event-goal-conversions)
- **PostHog:** [PostHog Web Analytics & Session Replay](https://posthog.com/docs/libraries/js)
- **Mixpanel:** [Mixpanel JavaScript Documentation](https://developer.mixpanel.com/docs/javascript-quickstart)

