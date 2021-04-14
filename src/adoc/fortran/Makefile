# Multipart: https://github.com/owenh000/asciidoctor-multipage
TARGET = main
DEST=../../../fortran

all:
	asciidoctor $(TARGET).adoc -r asciidoctor-multipage -b multipage_html5 -n -D$(DEST) -o index.html
	cp -r img $(DEST)
	cp -r images $(DEST)
	#asciidoctor-pdf $(TARGET).adoc -a icons -o ../../../pdf/fortran.pdf

clean:
	rm -f $(TARGET).html
