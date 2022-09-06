//script to display the exam timer
//set the exam time in minutes
  const examMinutes = .5;
  let time = examMinutes * 60;
      //get the id that will display the timer
      const counter = document.getElementById('timing');

      //show the timer after clicking the download button
      document.getElementById('link').addEventListener("click", setInterval(updateCounter, 1000));
        //the function to calculate the timer
        function updateCounter(){
          let hours = Math.floor(time / 36);
          const minutes = Math.floor(time / 60);
          let seconds = time % 60;
          seconds = seconds < 10 ? '0' + seconds : seconds;
          counter.innerHTML = `${hours}:${minutes}:${seconds}`;
          time--;
          //if the timer reaches zero the upload button becomes inactive
          if (seconds == 0) {
              time = 0;
             document.getElementById('btnUpload').disabled = true;
            }
      }
