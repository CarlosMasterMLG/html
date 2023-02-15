namespace Model
{
    public class Operations
    {
        public static int CalcularAreaTriangulo(int base_triangulo, int altura)
        {
            return (base_triangulo * altura) / 2;
        }

        function obtenerFactorial(int numero){

                int resultado = 1;
                
                if(numero == 0){
                    return 1;
                } else if(numero > 0){
                    
                    while(numero > 0){
                        resultado = resultado * numero;
                        numero--;
                    }
                    return resultado;
                } 

            }
    }
}