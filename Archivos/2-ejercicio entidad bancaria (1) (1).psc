Proceso sin_titulo
	Escribir ' cantidad de clientes '
	Leer n
	c1<-0
	c2<-0
	c3<-0
	c4<-0
	c5<-0
	Para i<-1 Hasta n Con Paso 1 Hacer
		Escribir ' Nombre cliente '
		Leer nc
		Escribir ' Tipo CDT '
		Leer t
		Escribir ' Valor de inversion '
		Leer v
		Escribir ' Dia y mes que lo adquirio '
		Leer d
		Si t=1 Entonces
			c1<-c1+1
			in<-v*0.01
			Escribir ' Valor de interes obtenido por el cliente ', nc , ' es = ', in   
		Sino
			Si t=2 Entonces
				c2<-c2+1
				in<-v*0.02
				Escribir ' Valor de interes obtenido por el cliente ', nc , ' es = ', in   
			Sino
				Si t=3 Entonces
					c3<-c3+1
					in<-v*0.03
					Escribir ' Valor de interes obtenido por el cliente ', nc , 'es = ', in 
				Sino
					Si t=4 Entonces
						c4<-c4+1
						in<-v*0.04
						Escribir ' Valor de interes obtenido por el cliente ', nc , ' es = ', in 
					Sino
						Si t=5 Entonces
							c5<-c5+1
							in<-v*0.05
							Escribir ' Valor de interes obtenido por el cliente ', nc , ' es = ', in
						Sino
						Fin Si
					Fin Si
				Fin Si
			Fin Si
		Fin Si
		acumv<-acumv+v
		acumin<-acumin+in
		p1<-(c1/n)*100
		p2<-(c2/n)*100
		p3<-(c3/n)*100
		p4<-(c4/n)*100
		p5<-(c5/n)*100
	Fin Para
	Escribir ' valor total de inversion de todos los clientes es  = ', acumv
	Escribir ' valor total de interes obtenidos de todos los clientes  es  = ' , acumin
	Escribir ' Clientes que adquirieron el CDT tipo 1 = ', p1,'%'
	Escribir ' Clientes que adquirieron el CDT tipo 2 = ', p2,'%'
	Escribir ' Clientes que adquirieron el CDT tipo 3 = ', p3,'%'
	Escribir ' Clientes que adquirieron el CDT tipo 4 = ', p4,'%'
	Escribir ' Clientes que adquirieron el CDT tipo 5 = ', p5,'%'
FinProceso
