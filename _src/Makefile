SHELL := /bin/bash
URL_BASE = https://samuelgomez.es/

INC = $(wildcard inc/*.html)

DIR_TARGET = $(shell dirname $(shell pwd))
TARGETS = $(shell echo $(SRC) | sed -e "s/_src\///g" -e "s/.php/.html/g")

DIR_SRC = $(shell pwd)
SRC = $(shell find $(DIR_SRC) -name "*.php" -not -path "*inc/*")

INC = $(shell find inc -name "*.php")

#vpath %.php $(DIR_SRC)
#vpath %.php $(DIR_SRC)/matematicas/problemas


# Genera la web estática
all: $(TARGETS) sitemap



# El parámetro 0 es la profundidad del directorio
$(DIR_TARGET)/%.html: $(DIR_SRC)/%.php $(INC)
	# Construyendo (0) $@
	@php $< 0 >$@

# El parámetro 1 es la profundidad del directorio
$(DIR_TARGET)/tpr/%.html: $(DIR_SRC)/tpr/%.php $(INC)
$(DIR_TARGET)/matematicas/%.html: $(DIR_SRC)/matematicas/%.php $(INC)
	# Construyendo (1) $@
	@php $< 1 >$@

# El parámetro 2 es la profundidad del directorio
$(DIR_TARGET)/matematicas/secundaria/%.html: $(DIR_SRC)/matematicas/secundaria/%.php $(INC)
	# Construyendo (2) $@
	@php $< 2 >$@



	
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
