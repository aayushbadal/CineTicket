const seatsContainer = document.getElementById('seats-container');

for(let row=0; row<8;row++){
    for(let col=0;col<10;col++){
        const seat = document.createElement("div");
        seat.className = "seat";

        const seatID= String.fromCharCode(65+row) + (col+1);
        seat.textContent = seatID;

        seatsContainer.appendChild(seat);
    }
}