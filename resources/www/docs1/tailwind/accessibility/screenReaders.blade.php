<x-www_layout2>
  <div class="max-w-3xl mx-auto pt-10 xl:max-w-none xl:ml-0 xl:mr-[15.5rem] xl:pr-16">
    <header id="header" class="relative z-20">
      <div>
        <p class="mb-2 text-sm leading-6 font-semibold text-sky-500 dark:text-sky-400">Accessibility</p>
        <div class="flex items-center">
          <h1
            class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">
            Screen Readers</h1>
        </div>
      </div>
      <p class="mt-2 text-lg text-slate-700 dark:text-slate-400">Utilities for improving accessibility with screen
        readers.</p>
    </header>
    <div class="mt-10 relative">
      <h2 class="flex whitespace-pre-wrap not-prose relative scroll-mt-[var(--scroll-mt)]" id="class-reference"><a
          class="group relative border-none lg:-ml-2 lg:pl-2" href="#class-reference"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span><span class="sr-only">Quick reference</span></a></h2>
      <div class="overflow-x-auto flex -mx-4 sm:-mx-6 md:mx-0">
        <div id="class-table"
          class="flex-none min-w-full px-4 sm:px-6 md:px-0 overflow-hidden lg:overflow-auto scrollbar:!w-1.5 scrollbar:!h-1.5 scrollbar:bg-transparent scrollbar-track:!bg-slate-100 scrollbar-thumb:!rounded scrollbar-thumb:!bg-slate-300 scrollbar-track:!rounded dark:scrollbar-track:!bg-slate-500/[0.16] dark:scrollbar-thumb:!bg-slate-500/50">
          <table class="w-full text-left border-collapse">
            <thead>
              <tr>
                <th
                  class="sticky z-10 top-0 text-sm leading-6 font-semibold text-slate-700 bg-white p-0 dark:bg-slate-900 dark:text-slate-300">
                  <div class="py-2 pr-2 border-b border-slate-200 dark:border-slate-400/20">Class</div>
                </th>
                <th
                  class="sticky z-10 top-0 text-sm leading-6 font-semibold text-slate-700 bg-white p-0 dark:bg-slate-900 dark:text-slate-300">
                  <div class="py-2 pl-2 border-b border-slate-200 dark:border-slate-400/20">Properties</div>
                </th>
              </tr>
            </thead>
            <tbody class="align-baseline">
              <tr>
                <td translate="no"
                  class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400">
                  sr-only</td>
                <td translate="no"
                  class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300">
                  position: absolute;
                  width: 1px;
                  height: 1px;
                  padding: 0;
                  margin: -1px;
                  overflow: hidden;
                  clip: rect(0, 0, 0, 0);
                  white-space: nowrap;
                  border-width: 0;
                </td>
              </tr>
              <tr>
                <td translate="no"
                  class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                  not-sr-only</td>
                <td translate="no"
                  class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                  position: static;
                  width: auto;
                  height: auto;
                  padding: 0;
                  margin: 0;
                  overflow: visible;
                  clip: auto;
                  white-space: normal;
                </td>
              </tr>
            </tbody>
          </table>
          <div class="sticky bottom-0 h-px -mt-px bg-slate-200 dark:bg-slate-400/20"></div>
        </div>
      </div>
    </div>
    <div id="content-wrapper" class="relative z-20 prose prose-slate mt-12 dark:prose-dark">
      <h2
        class="flex whitespace-pre-wrap not-prose mb-2 text-sm leading-6 text-sky-500 font-semibold tracking-normal dark:text-sky-400"
        id="basic-usage"><a class="group relative border-none lg:-ml-2 lg:pl-2" href="#basic-usage"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span>Basic usage</a></h2>
      <h3 class="flex whitespace-pre-wrap not-prose" id="screen-reader-only-elements"><a
          class="group relative border-none lg:-ml-2 lg:pl-2" href="#screen-reader-only-elements"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span>Screen-reader-only elements</a></h3>
      <p>Use <code>sr-only</code> to hide an element visually without hiding it from screen readers:</p>
      <pre
        class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>#<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>svg</span><span class="token punctuation">&gt;</span></span><span class="token comment">&lt;!-- ... --&gt;</span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>svg</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>sr-only<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Settings<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span></code></pre>
      <h3 class="flex whitespace-pre-wrap not-prose" id="undoing-screen-reader-only-elements"><a
          class="group relative border-none lg:-ml-2 lg:pl-2" href="#undoing-screen-reader-only-elements"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span>Undoing screen-reader-only elements</a></h3>
      <p>Use <code>not-sr-only</code> to undo <code>sr-only</code>, making an element visible to sighted users as well
        as screen readers. This can be useful when you want to visually hide something on small screens but show it on
        larger screens for example:</p>
      <pre
        class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>#<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>svg</span><span class="token punctuation">&gt;</span></span><span class="token comment">&lt;!-- ... --&gt;</span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>svg</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>sr-only sm:not-sr-only<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Settings<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span></code></pre>
      <hr>
      <h2
        class="flex whitespace-pre-wrap not-prose mb-2 text-sm leading-6 text-sky-500 font-semibold tracking-normal dark:text-sky-400"
        id="applying-conditionally" data-docsearch-ignore=""><a class="group relative border-none lg:-ml-2 lg:pl-2"
          href="#applying-conditionally"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span>Applying conditionally</a></h2>
      <h3 class="flex whitespace-pre-wrap not-prose" id="hover-focus-and-other-states" data-docsearch-ignore=""><a
          class="group relative border-none lg:-ml-2 lg:pl-2" href="#hover-focus-and-other-states"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span>Hover, focus, and other states</a></h3>
      <p>Tailwind lets you conditionally apply utility classes in different states using variant modifiers. For example,
        use <code>focus:not-sr-only</code> to only apply the <code>not-sr-only</code> utility on focus.</p>
      <pre
        class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>#content<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>sr-only <span class="code-highlight bg-code-highlight">focus:not-sr-only</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  Skip to content
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span></code></pre>
      <p>For a complete list of all available state modifiers, check out the <a
          href="/docs/hover-focus-and-other-states">Hover, Focus, &amp; Other States</a> documentation.</p>
      <h3 class="flex whitespace-pre-wrap not-prose" id="breakpoints-and-media-queries" data-docsearch-ignore=""><a
          class="group relative border-none lg:-ml-2 lg:pl-2" href="#breakpoints-and-media-queries"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span>Breakpoints and media queries</a></h3>
      <p>You can also use variant modifiers to target media queries like responsive breakpoints, dark mode,
        prefers-reduced-motion, and more. For example, use <code>md:not-sr-only</code> to apply the
        <code>not-sr-only</code> utility at only medium screen sizes and above.
      </p>
      <pre class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>sr-only <span class="code-highlight bg-code-highlight">md:not-sr-only</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token comment">&lt;!-- ... --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
</code></pre>
      <p>To learn more, check out the documentation on <a href="/docs/responsive-design">Responsive Design</a>, <a
          href="/docs/dark-mode">Dark Mode</a> and <a
          href="/docs/hover-focus-and-other-states#media-and-feature-queries">other media query modifiers</a>.</p>
    </div>
    <footer class="text-sm leading-6 mt-12">
      <div class="mb-10 text-slate-700 font-semibold flex items-center dark:text-slate-200"><a
          class="group flex items-center hover:text-slate-900 dark:hover:text-white" href="/docs/stroke-width"><svg
            viewBox="0 0 3 6"
            class="mr-3 w-auto h-1.5 text-slate-400 overflow-visible group-hover:text-slate-600 dark:group-hover:text-slate-300">
            <path d="M3 0L0 3L3 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round"></path>
          </svg>Stroke Width</a><a class="group ml-auto flex items-center hover:text-slate-900 dark:hover:text-white"
          href="/docs/forced-color-adjust">Forced Color Adjust<svg viewBox="0 0 3 6"
            class="ml-3 w-auto h-1.5 text-slate-400 overflow-visible group-hover:text-slate-600 dark:group-hover:text-slate-300">
            <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round"></path>
          </svg></a></div>
      <div class="pt-10 pb-28 border-t border-slate-200 sm:flex justify-between text-slate-500 dark:border-slate-200/5">
        <div class="mb-6 sm:mb-0 sm:flex">
          <p>Copyright © 2024 Tailwind Labs Inc.</p>
          <p class="sm:ml-4 sm:pl-4 sm:border-l sm:border-slate-200 dark:sm:border-slate-200/5"><a
              class="hover:text-slate-900 dark:hover:text-slate-400" href="/brand">Trademark Policy</a></p>
        </div><a class="hover:text-slate-900 dark:hover:text-slate-400"
          href="https://github.com/tailwindlabs/tailwindcss.com/edit/master/src/pages/docs/screen-readers.mdx">Edit this
          page on GitHub</a>
      </div>
    </footer>
    <div
      class="fixed z-20 top-[3.8125rem] bottom-0 right-[max(0px,calc(50%-45rem))] w-[19.5rem] py-10 overflow-y-auto hidden xl:block">
      <div class="px-8">
        <h5 class="text-slate-900 font-semibold mb-4 text-sm leading-6 dark:text-slate-100">On this page</h5>
        <ul class="text-slate-700 text-sm leading-6">
          <li><a href="#class-reference" class="block py-1 font-medium font-medium text-sky-500 dark:text-sky-400">Quick
              reference</a></li>
          <li><a href="#basic-usage"
              class="block py-1 font-medium hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">Basic
              usage</a></li>
          <li class="ml-4"><a href="#screen-reader-only-elements"
              class="group flex items-start py-1 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"><svg
                width="3" height="24" viewBox="0 -9 3 24"
                class="mr-2 text-slate-400 overflow-visible group-hover:text-slate-600 dark:text-slate-600 dark:group-hover:text-slate-500">
                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                </path>
              </svg>Screen-reader-only elements</a></li>
          <li class="ml-4"><a href="#undoing-screen-reader-only-elements"
              class="group flex items-start py-1 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"><svg
                width="3" height="24" viewBox="0 -9 3 24"
                class="mr-2 text-slate-400 overflow-visible group-hover:text-slate-600 dark:text-slate-600 dark:group-hover:text-slate-500">
                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                </path>
              </svg>Undoing screen-reader-only elements</a></li>
          <li><a href="#applying-conditionally"
              class="block py-1 font-medium hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">Applying
              conditionally</a></li>
          <li class="ml-4"><a href="#hover-focus-and-other-states"
              class="group flex items-start py-1 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"><svg
                width="3" height="24" viewBox="0 -9 3 24"
                class="mr-2 text-slate-400 overflow-visible group-hover:text-slate-600 dark:text-slate-600 dark:group-hover:text-slate-500">
                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                </path>
              </svg>Hover, focus, and other states</a></li>
          <li class="ml-4"><a href="#breakpoints-and-media-queries"
              class="group flex items-start py-1 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"><svg
                width="3" height="24" viewBox="0 -9 3 24"
                class="mr-2 text-slate-400 overflow-visible group-hover:text-slate-600 dark:text-slate-600 dark:group-hover:text-slate-500">
                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                </path>
              </svg>Breakpoints and media queries</a></li>
        </ul>
      </div>
      <div class="mt-8 overflow-hidden">
        <div class="p-8"><a href="https://www.refactoringui.com/?ref=sidebar"
            class="relative block pt-80 -m-6 p-6 rounded-lg focus:outline-none focus:bg-slate-50 dark:focus:bg-slate-800/25"><img
              class="pointer-events-none h-[673px] w-[536px] max-w-none absolute -top-[112px] -right-6"
              src="/img/refactoring-ui-sidebar.png" alt="Refactoring UI by Adam Wathan and Steve Schoger"
              decoding="async">
            <div>
              <p class="text-[0.8125rem] font-semibold leading-5 text-sky-500 dark:text-sky-400">From the creators of
                Tailwind CSS</p>
              <p class="mt-1 text-base font-bold tracking-tight leading-[1.375] text-slate-900 dark:text-slate-200">Make
                your ideas look awesome, without relying on a designer.</p>
              <figure class="mt-6 pl-4 border-l border-slate-100 dark:border-slate-700">
                <blockquote class="text-sm leading-5 text-slate-600 dark:text-slate-400">“This is the survival kit I
                  wish I had when I started building apps.”</blockquote>
                <figcaption class="mt-3 text-xs leading-5 text-slate-500">Derrick Reimer, <span class="">SavvyCal</span>
                </figcaption>
              </figure>
            </div>
          </a></div>
      </div>
    </div>
  </div>
</x-www_layout2>