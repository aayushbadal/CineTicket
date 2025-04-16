const seatsContainer = document.getElementById('seats-container');

const selectedSeats=[];

for(let row=0; row<8;row++){
    for(let col=0;col<10;col++){
        const seat = document.createElement("div");
        seat.className = "seat";

        const seatID= String.fromCharCode(65+row) + (col+1);
        seat.textContent = seatID;

        seat.addEventListener('click',function(){
            toggleSeatSelection(seat, seatID);
        });


        seatsContainer.appendChild(seat);
    }

    function toggleSeatSelection(seatElement, seatID){
        if(seatElement.classList.contains('selected')){
            seatElement.classList.remove('selected');
            selectedSeats = selectedSeats.filter(id => id != seatID);
        } else{
            seatElement.classList.add('selected');
            selectedSeats.push('seatID');
        }
    }
}