<?php include('inc/cabecera_html.php'); ?>
	<title>Neo vim</title>
	<link rel="stylesheet" type="text/css" href="css/highlight.css">
	</head>
<body>
<?php include('inc/lib.php'); ?>
<?php include('inc/cabecera_fixed.php'); ?>

<nav id="menu"><ul>
		<h1>Temas</h1>
		<li><a href="#top">.vimrc</a></li>
	</ul>
</nav>

<main>

<header><h1><a name="variables">Editor de código Neo Vim</a></h1></header>

<!------------------------------------------------------------------------------------->
<section>
<h1>.vimrc</h1>
<p>Este es el fichero de configuración a fecha de <time>2022-07-07</time>.</p>


<?php
$c = <<<'END_CODE'
set termguicolors
syntax on
set number background=dark
set mouse=a
set title
set laststatus=2
set cursorline
set clipboard=unnamedplus	"Registro * como clipboard
set ignorecase	"Search ignore case
set autoindent

" Dirección en la que se expanden la apertura de nuevas ventanas split
set splitright
set splitbelow
colorscheme oceanicnext
filetype plugin indent on

"Búsqueda
set hlsearch	"Highlight Búsqueda
set incsearch	"set incremental search, like modern browsers

"Fuentes UTF-8
set encoding=utf-8
set fileencoding=utf-8
set termencoding=utf-8

"Unodfile
set undofile
set undodir=~/.vim/undodir

"Tabulaciones de 4 espacios y la tecla tabulador también será de 4 espacios
set noexpandtab
set tabstop=4
set shiftwidth=4
set textwidth=100

"Pathogen PLUGINS
execute pathogen#infect()

"Markdown PLUGIN
augroup filetype_markdown
	let g:vim_markdown_folding_disabled = 1
	let g:vim_markdown_math = 1
	let g:vim_markdown_frontmatter = 1
augroup end 

"Atajos LaTeX
augroup filetype_tex
	"Begin End
	autocmd filetype tex inoremap <C-B> <ESC>YpkI\begin{<ESC>A}<ESC>jI\end{<ESC>A}<esc>kA
	inoremap <C-p> \begin{problema}{\cite[p]{prieto}}{<ESC>o}<Esc>o\end{problema}<Esc>kk10li
	"Letras Griegas
	inoremap <C-g>a \alpha
	inoremap <C-g>b \beta
	inoremap <C-g>l \lambda
	inoremap <C-g>m \mu
	inoremap <C-g>g \gamma
	inoremap <C-g>e \epsilon
	inoremap <C-g>o \omega
	inoremap <C-g>s \sigma
"
	"Letras bonitas para conjuntos
	inoremap <C-b>c \mathbb{C}
	inoremap <C-b>k \mathbb{K}
	inoremap <C-b>n \mathbb{N}
	inoremap <C-b>r \mathbb{R}
	"Vectores
	inoremap <C-e>0 \vec{0}
	inoremap <C-e>e \vec{e}
	inoremap <C-e>u \vec{u}
	inoremap <C-e>v \vec{v}
	inoremap <C-e>w \vec{w}
	inoremap <C-e>x \vec{x}
	inoremap <C-e>y \vec{y}
	inoremap <C-e>z \vec{z}
augroup end

augroup filetype_fortran
	autocmd filetype fortran let b:fortran_free_source = 1
	autocmd filetype fortran let g:use_findent = 1
	autocmd filetype fortran let g:indent_flags = "-Rr"
	autocmd filetype fortran noremap zz :w<cr>:!wfindent -Rr -i4 %<cr>:e<cr>
augroup end

"Rust
let g:rustfmt_autosave = 1

"Autocompletar
inoremap <expr> )  strpart(getline('.'), col('.')-1, 1) == ")" ? "\<Right>" : ")"
inoremap <expr> ]  strpart(getline('.'), col('.')-1, 1) == "]" ? "\<Right>" : "]"
inoremap { {}<left>
inoremap <expr> }  strpart(getline('.'), col('.')-1, 1) == "}" ? "\<Right>" : "}"
inoremap {<cr> {<cr>}<ESC>ko

"Colores de comentarios
"https://jonasjacek.github.io/colors/
"Listar colores activos para modificar :so $VIMRUNTIME/syntax/hitest.vim
"Listar colores activos :hi
set background=dark
highlight Comment ctermfg=red guifg=#ff3030
highlight LineNr ctermfg=23 guifg=#00d787
highlight PmenuSel ctermfg=white ctermbg=38 guifg=white guibg=#00afd7
highlight Pmenu ctermbg=28 guibg=#303030 guifg=#606060
"highlight Normal ctermfg=46 guifg=#ffffff
highlight Normal ctermfg=46 guifg=#18F018
highlight PreProc guifg=#ffb533 guibg=none
highlight Type guifg=#0077ff
highlight fortranTab guifg=none guibg=none
highlight fortranUnitHeader guifg=orange gui=bold guibg=none 
"Colores para GNUPlot
autocmd BufEnter *.gnuplot :setlocal filetype=gnuplot
autocmd BufEnter *.gp :setlocal filetype=gnuplot
"autocmd BufEnter *.jl :setlocal filetype=julia

"Atajos generales de teclado
nnoremap cc :!make<cr>
nnoremap <S-s><S-s> :w<cr>
nnoremap ls :buffers<cr>
nnoremap gb :w<cr>:buffers<cr>:b<space>
inoremap jj <ESC>
map <space> /



"Cita
"inoremap  <C-i>     {\cite[p]{palacios}}{<Esc>o<Esc>}<ESC>k15li
"inoremap       {\cite[p]{palacios}}{<Esc>o<Esc>

"Números de línea
set number relativenumber
augroup numbertoggle
	autocmd!
	autocmd BufEnter,FocusGained,InsertLeave * set relativenumber
	autocmd BufLeave,FocusLost,InsertEnter   * set norelativenumber
augroup END

"No backups
set nobackup
set nowb
set noswapfile

"Skeletons
"autocmd BufNewFile *.c 		0r ~/.vim/skeleton/skeleton.c
"autocmd BufNewFile *.tex 	0r ~/.vim/skeleton/skeleton.tex
"autocmd BufNewFile *.html 	0r ~/.vim/skeleton/skeleton.html

"Cambia el aspecto dependiendo del modo de VIM
highlight Cursorline cterm=NONE gui=NONE guibg=NONE
autocmd InsertEnter * highlight Cursorline cterm=underline gui=underline
autocmd InsertLeave * highlight Cursorline cterm=NONE gui=NONE
set guicursor= 
set statusline=%n)\ %m\ %F%=%c\ %l/%L\ %{FugitiveStatusline()}[%{&ff}\ %{&enc}\ %Y]
set wildmenu " enhanced command line completion
"set wildmode=list:longest " complete files like a shell
set scrolloff=3 " Minimum lines to keep above and below cursor

"scriptnames
"Fuentes: https://github.com/mectos/dotfiles/blob/master/vim/vimrc
call plug#begin(stdpath('data') . '/plugged')
"Plug 'neovim/nvim-lspconfig'
"Plug 'neovim/nvim-lspconfig'
"Plug 'kabouzeid/nvim-lspinstall'
Plug 'scrooloose/nerdtree'
"Plug 'rudrab/vimf90'
Plug 'neoclide/coc.nvim', {'branch': 'release'}
"Plug 'kyazdani42/nvim-web-devicons' " for file icons
"Plug 'kyazdani42/nvim-tree.lua'
"Plug 'neovim/nvim-lspconfig'
"Plug 'leanprover/lean.vim'
"Plug 'autozimu/LanguageClient-neovim', {
"    \ 'branch': 'next',
"    \ 'do': 'bash install.sh',
"    \ }
call plug#end()


"NERDTree
nnoremap <C-l> :NERDTreeToggle<cr>
" Exit Vim if NERDTree is the only window remaining in the only tab.
autocmd BufEnter * if tabpagenr('$') == 1 && winnr('$') == 1 && exists('b:NERDTree') && b:NERDTree.isTabTree() | quit | endif
" Close the tab if NERDTree is the only window remaining in it.
autocmd BufEnter * if winnr('$') == 1 && exists('b:NERDTree') && b:NERDTree.isTabTree() | quit | endif
END_CODE;

colorea($c, "vim");
?>


</section>


</main>
<?php include('inc/footer.php'); ?>
