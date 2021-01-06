<title>kirby.css</title>

<link rel="stylesheet" href="/css/variables.css">
<link rel="stylesheet" href="/css/reset.css">
<link rel="stylesheet" href="/css/buttons.css">
<link rel="stylesheet" href="/css/columns.css">
<link rel="stylesheet" href="/css/headings.css">
<link rel="stylesheet" href="/css/aspect-ratio.css">
<link rel="stylesheet" href="/css/prose.css">
<link rel="stylesheet" href="/css/boxes.css">
<link rel="stylesheet" href="/css/code.css">
<link rel="stylesheet" href="/css/utilities.css">

<header class="p-12">
  <h1 class="h1">Kirby.css</h1>
</header>

<div class="columns" style="--columns: 2">
  <section class="p-12">
    <p class="h6 mb-6">Styled Headings</p>

    <h1 class="h1">Heading 1</h1>
    <h2 class="h2">Heading 2</h2>
    <h3 class="h3">Heading 3</h3>
    <h4 class="h4">Heading 4</h4>
    <h5 class="h5">Heading 5</h5>
    <h6 class="h6">Heading 6</h6>
  </section>

  <section class="p-12">
    <p class="h6 mb-6">Unstyled Headings</p>

    <h1>Heading 1</h1>
    <h2>Heading 2</h2>
    <h3>Heading 3</h3>
    <h4>Heading 4</h4>
    <h5>Heading 5</h5>
    <h6>Heading 6</h6>
  </section>
</div>

<div class="columns" style="--columns: 2">
  <section class="p-12">
    <p class="h6 mb-6">Links</p>
    <p><a href="">Unstyled</a></p>
    <p><a class="underline" href="">Styled</a></p>
  </section>
  <section class="p-12">
    <p class="h6 mb-6">Buttons</p>

    <p class="columns" style="--columns: 5">
      <button class="btn">Styled</button>
      <button class="btn" style="--color: var(--color-yellow-400); --text: var(--color-black)">Styled</button>
      <button class="btn btn--filled">Filled</button>
      <button class="btn btn--filled" style="--color: var(--color-yellow-400); --text: var(--color-black)">Color</button>
      <button>Unstyled</button>
    </p>

  </section>
</div>

<div class="columns" style="--columns-sm: 1; --columns-md: 2; --columns-lg: 4">

  <section class="p-12">
    <p class="h6 mb-6">Prose / Headings</p>

    <div class="prose">
      <h1>Heading 1</h1>
      <p>This is a paragraph</p>

      <h2>Heading 2</h2>
      <p>This is a paragraph</p>

      <h3>Heading 3</h3>
      <p>This is a paragraph</p>

      <h4>Heading 4</h4>
      <p>This is a paragraph</p>

      <h5>Heading 5</h5>
      <p>This is a paragraph</p>

      <h6>Heading 6</h6>
      <p>This is a paragraph</p>

    </div>
  </section>

  <section class="p-12">
    <p class="h6 mb-6">Prose / Paragraphs</p>

    <div class="prose">
      <p>Simple paragraphs in prose blocks have a line height of 1.5 and a bottom margin of 1.5rem</p>
      <p>Prose blocks handle all basic inline elements: Text with <a href="">links</a>. Inline <code>code</code>. And of course also <strong>bold</strong> or <em>italic</em></p>
      <p>Paragraphs can be intercepted with hr elements for better separation.<p>
      <hr>
      <p>Hard breaks should be avoided when possible<br>but can be used when really necessary</p>
    </div>
  </section>

  <section class="p-12">
    <p class="h6 mb-6">Prose / Lists</p>

    <div class="prose">
      <ul>
        <li>Unordered list item 1</li>
        <li>
          Unordered list item 2
          <ol>
            <li>Nested ordered list item 1</li>
            <li>Nested ordered list item 2</li>
            <li>Nested ordered list item 3</li>
          </ol>
        </li>
        <li>
          Unordered list item 3
          <ul>
            <li>Nested unordered list item 1</li>
            <li>Nested unordered list item 2</li>
            <li>Nested unordered list item 3</li>
          </ul>
        </li>
      </ul>

      <ol>
        <li>Ordered list item 1</li>
        <li>
          Ordered list item 2
          <ol>
            <li>Nested ordered list item 1</li>
            <li>Nested ordered list item 2</li>
            <li>Nested ordered list item 3</li>
          </ol>
        </li>
        <li>
          Ordered list item 3
          <ul>
            <li>Nested unordered list item 1</li>
            <li>Nested unordered list item 2</li>
            <li>Nested unordered list item 3</li>
          </ul>
        </li>
      </ol>
    </div>

  </section>

  <section class="p-12">
    <p class="h6 mb-6">Prose / Quotes</p>

    <div class="prose">
      <blockquote>
        <p>Simple quote without citation. Let's add more text to force multiple&nbsp;lines.</p>
      </blockquote>

      <blockquote>
        <p>More complete quote with citation. Let's add more text to force multiple&nbsp;lines.</p>
        <footer>
          Albert Einstein
        </footer>
      </blockquote>

    </div>
  </section>

  <section class="p-12">
    <p class="h6 mb-6">Prose / Code Blocks</p>

    <div class="prose">
      <pre><code class="language-php"><span class="code-token code-variable">$page</span>
  <span class="code-token code-operator">-</span><span class="code-token code-operator">&gt;</span><span class="code-token code-function">images</span><span class="code-token code-punctuation">(</span><span class="code-token code-punctuation">)</span>
  <span class="code-token code-operator">-</span><span class="code-token code-operator">&gt;</span><span class="code-token code-function">template</span><span class="code-token code-punctuation">(</span><span class="code-token code-single-quoted-string code-string">'gallery'</span><span class="code-token code-punctuation">)</span>
  <span class="code-token code-operator">-</span><span class="code-token code-operator">&gt;</span><span class="code-token code-function">first</span><span class="code-token code-punctuation">(</span><span class="code-token code-punctuation">)</span>
  <span class="code-token code-operator">-</span><span class="code-token code-operator">&gt;</span><span class="code-token code-function">srcset</span><span class="code-token code-punctuation">(</span>
    <span class="code-token code-single-quoted-string code-string">'1x'</span> <span class="code-token code-operator">=</span><span class="code-token code-operator">&gt;</span> <span class="code-token code-punctuation">[</span>
        <span class="code-token code-single-quoted-string code-string">'width'</span> <span class="code-token code-operator">=</span><span class="code-token code-operator">&gt;</span> <span class="code-token code-number">512</span><span class="code-token code-punctuation">,</span>
        <span class="code-token code-single-quoted-string code-string">'height'</span> <span class="code-token code-operator">=</span><span class="code-token code-operator">&gt;</span> <span class="code-token code-number">512</span><span class="code-token code-punctuation">,</span>
        <span class="code-token code-single-quoted-string code-string">'crop'</span> <span class="code-token code-operator">=</span><span class="code-token code-operator">&gt;</span> <span class="code-token code-single-quoted-string code-string">'center'</span>
    <span class="code-token code-punctuation">]</span><span class="code-token code-punctuation">,</span>
    <span class="code-token code-single-quoted-string code-string">'2x'</span> <span class="code-token code-operator">=</span><span class="code-token code-operator">&gt;</span> <span class="code-token code-punctuation">[</span>
        <span class="code-token code-single-quoted-string code-string">'width'</span> <span class="code-token code-operator">=</span><span class="code-token code-operator">&gt;</span> <span class="code-token code-number">1024</span><span class="code-token code-punctuation">,</span>
        <span class="code-token code-single-quoted-string code-string">'height'</span> <span class="code-token code-operator">=</span><span class="code-token code-operator">&gt;</span> <span class="code-token code-number">1024</span><span class="code-token code-punctuation">,</span>
        <span class="code-token code-single-quoted-string code-string">'crop'</span> <span class="code-token code-operator">=</span><span class="code-token code-operator">&gt;</span> <span class="code-token code-single-quoted-string code-string">'center'</span>
    <span class="code-token code-punctuation">]</span>
  <span class="code-token code-punctuation">]</span><span class="code-token code-punctuation">)</span><span class="code-token code-punctuation">;</span></code></pre>
    </div>
  </section>

  <section class="p-12">
    <p class="h6 mb-6">Prose / Table</p>

    <div class="prose">
      <table>
        <tr>
          <th>Column A</th>
          <th>Column B</th>
          <th>Column C</th>
        </tr>
        <tr>
          <td>Value A</td>
          <td>Value B</td>
          <td>Value C</td>
        </tr>
        <tr>
          <td>Value A</td>
          <td>Value B</td>
          <td>Value C</td>
        </tr>
        <tr>
          <td>Value A</td>
          <td>Value B</td>
          <td>Value C</td>
        </tr>
      </table>
    </div>
  </section>

</div>


<section class="p-12">
  <p class="h6 mb-6">Aspect Ratio</p>
  <ul class="columns" style="--columns-sm: 2; --columns-md: 3; --columns-lg: 9">
    <?php foreach (['1/1', '10/8', '4/3', '7/5', '3/2', '5/3', '16/9', '21/9',  '3/1'] as $ratio): ?>
    <li>
      <figure class="bg-light" style="--aspect-ratio: <?= $ratio ?>">
        <p class="p-3 text-xs font-mono"><?= $ratio ?></p>
      </figure>
    </li>
    <?php endforeach ?>
  </ul>
</section>

<section class="p-12">
  <p class="h6 mb-6">Colors</p>

  <ul class="columns" style="--columns-sm: 2; --columns-md: 3; --columns-lg: 9; --gap: 2px">
    <?php foreach (['gray', 'yellow', 'orange', 'red', 'purple', 'blue', 'aqua', 'green'] as $color): ?>
    <?php foreach ([100, 200, 300, 400, 500, 600, 700, 800, 900] as $variant): ?>
    <li>
      <figure style="background: var(--color-<?= $color ?>-<?= $variant ?>); --aspect-ratio: 1/1">
        <p class="p-3 text-xs font-mono" style="color: <?= $variant < 600 ? 'rgba(0,0,0, .75)' : 'rgba(255,255,255, .75)' ?>">
          <?= $color ?>-<?= $variant ?>
        </p>
      </figure>
    </li>
    <?php endforeach ?>
    <?php endforeach ?>
  </ul>

</section>

<section class="p-12">
  <p class="h6 mb-6">Backgrounds</p>

  <div class="columns" style="--columns: 3">
    <div class="p-12 bg-black color-white text-xs font-mono">bg-black</div>
    <div class="p-12 bg-light text-xs font-mono">bg-light</div>
    <div class="p-12 bg-white text-xs font-mono">bg-white</div>
  </div>

</section>

<section class="p-12">
  <p class="h6 mb-6">Shadows</p>

  <ul class="columns p-12 bg-light rounded" style="--columns-sm: 2; --columns-md: 3; --columns-lg: 6">
    <?php foreach (['', '-md', '-lg', '-xl', '-outline'] as $shadow): ?>
    <li class="p-6 bg-white text-xs font-mono rounded" style="border: 1px solid transparent; box-shadow: var(--shadow<?= $shadow ?>)">
      --shadow<?= $shadow ?>
    </li>
    <?php endforeach ?>
    <li class="p-6 bg-white text-xs font-mono rounded" style="border: 1px solid var(--color-gray-300); box-shadow: var(--shadow-inset)">
      --shadow-inset
    </li>
  </ul>

</section>

<section class="p-12">
  <p class="h6 mb-6">Boxes</p>

  <div class="columns" style="--columns: 3">
    <aside aria-label="Info" class="box box--info">
      <svg aria-hidden="true" height="16" width="16"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm1 12H7V7h2v5zM8 6c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1z"></path></svg>
      <div class="prose">
        <p>The following methods have been marked as deprecated since Kirby 3.0.0 and are now removed.</p>
      </div>
    </aside>

    <aside aria-label="Warning" class="box box--warning">
      <svg aria-hidden="true" height="16" width="16"><path d="M15.216 13.529L8.882 1.654a1 1 0 00-1.765 0L.784 13.529A1 1 0 001.667 15h12.667a1 1 0 00.882-1.471zM8 13a1 1 0 110-2 1 1 0 010 2zm1-3H7V6h2v4z"></path></svg>
      <div class="prose">
        <p>The following methods have been marked as deprecated since Kirby 3.0.0 and are now removed.</p>
      </div>
    </aside>

    <aside aria-label="Alert" class="box box--alert">
      <svg aria-hidden="true" height="16" width="16"><path d="M15.216 13.529L8.882 1.654a1 1 0 00-1.765 0L.784 13.529A1 1 0 001.667 15h12.667a1 1 0 00.882-1.471zM8 13a1 1 0 110-2 1 1 0 010 2zm1-3H7V6h2v4z"></path></svg>
      <div class="prose">
        <p>The following methods have been marked as deprecated since Kirby 3.0.0 and are now removed.</p>
      </div>
    </aside>
  </div>
</section>
