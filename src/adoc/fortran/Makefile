# Multipart: https://github.com/owenh000/asciidoctor-multipage
TARGET = main
SOURCES = estructuras_de_datos.adoc funciones.adoc medidas_tiempo.adoc otros.adoc plantillas.adoc variable_compleja.adoc
TARGETS = $(SOURCES:.adoc=.html)
DEST=../../../fortran
ARGS = -a pygments-style=manni -a pygments-css=style -a pygments-linunums-mode=class -a source-highlighter=pygments -a stylesheet=css/general.css


all: $(TARGETS)
	#asciidoctor $(TARGET).adoc -r asciidoctor-multipage -b multipage_html5 -n -D$(DEST) -o index.html
	#cp -r img $(DEST)
	#cp -r images $(DEST)
	#asciidoctor-pdf $(TARGET).adoc -a icons -o ../../../pdf/fortran.pdf

%.html: %.adoc
	asciidoctor $< $(ARGS) -n -D$(DEST) -o $@
	sed -i 's/<div id="header">/<div id="header">CABECERA/' $(DEST)/$@

clean:
	rm -f $(TARGET).html
	rm $(DEST)/*
