
void ft_ultimate_ft(int *********nbr){
    *********nbr = 42;
}

int main(void){

    int *********ptr_nbr;
    int ********ptr_nbr2;
    int *******ptr_nbr3;
    int ******ptr_nbr4;
    int *****ptr_nbr5;
    int ****ptr_nbr6;
    int ***ptr_nbr7;
    int **ptr_nbr8;
    int *ptr_nbr9;

    int nbr = 2;
    ptr_nbr9 = &nbr;
    ptr_nbr8 = &ptr_nbr9;
    ptr_nbr7 = &ptr_nbr8;
    ptr_nbr6 = &ptr_nbr7;
    ptr_nbr5 = &ptr_nbr6;
    ptr_nbr4 = &ptr_nbr5;
    ptr_nbr3 = &ptr_nbr4;
    ptr_nbr2 = &ptr_nbr3;
    ptr_nbr = &ptr_nbr2;

    ft_ultimate_ft(ptr_nbr);
}