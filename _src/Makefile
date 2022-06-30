SHELL := /bin/bash
URL_BASE = https://samuelgomez.es/

INC = $(wildcard inc/*.html)

DIR_TARGET = $(shell dirname $(shell pwd))
TARGETS = $(shell echo $(SRC) | sed -e "s/_src\///g" -e "s/.php/.html/g")

DIR_SRC = $(shell pwd)
SRC = $(shell find $(DIR_SRC) -name "*.php" -not -path "*inc/*")

INC = $(shell find inc -name "*.php")


# Genera la web estática
all: $(TARGETS) sitemap

$(DIR_TARGET)/%.html: $(DIR_SRC)/%.php $(INC)
	@# $(a) es el nivel de profundidad de directorios del fichero a construir
	$(eval a=$(shell echo $(DIR_TARGET)// | sed 's/[^\/]//g' | tr -d \\n | wc -m))
	@# $(b) es el nivel de profundidad de directorios del directorio objetivo
	$(eval b=$(shell echo $< | sed 's/[^\/]//g' | tr -d \\n | wc -m))
	@# $(c) es el nivel de profundidad del objetivo a construir
	$(eval c=$(shell expr $b - $a))
	# Constryendo (nivelnivel  $c) $<
	@php $< $(c) >$@

	
# Comprueba errores
check:
	@for f in ../*.html; do \
		echo "Analizado $$f"; \
		tidy -q -errors -utf8 $$f; \
		done;

# Construye el sitemap
sitemap:
	@echo $(addprefix $(URL_BASE), $(shell find .. -name "*.html" -not -path "*fortran/*")) \
		| sed -e 's/\.\.\///g' -e 's/ /\n/g' > ../sitemap.txt

	

clean:
	rm -f $(TARGETS) ../sitemap.txt
