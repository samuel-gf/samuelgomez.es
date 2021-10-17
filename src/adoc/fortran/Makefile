# Multipart: https://github.com/owenh000/asciidoctor-multipage
SOURCES = estructuras_de_datos.adoc funciones.adoc medidas_tiempo.adoc otros.adoc plantillas.adoc variable_compleja.adoc
DEST=../../../fortran
TARGETS = $(addprefix $(DEST)/,$(SOURCES:.adoc=.html))


#$(DEST)/index.html: $(TARGETS)
$(DEST)/index.html: $(TARGETS)
	asciidoctor main.adoc -r asciidoctor-multipage -b multipage_html5 -n -D$(DEST) -o index.html
	#cp -r img $(DEST)
	#cp -r images $(DEST)
	asciidoctor-pdf main.adoc -a icons -o ../../../pdf/fortran.pdf

$(DEST)/%.html: %.adoc
	@:	# Do nothing

#asciidoctor $< $(ARGS) -n -o $@
#sed -i 's/<div id="header">/<div id="header">CABECERA/' $(DEST)/$@

.PHONY: clean	# Not associate with a file named 'clean'
clean:
	rm -f $(TARGETS) $(DEST)/index.html
