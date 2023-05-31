const CanvasFrameScrubber = (() => {
  const create = (frames, containerName) => {
    const observer = {
      next: (percentage) => {
        var frameIndex = Math.floor((percentage * (frames.length - 1)) / 100);
        // THIS WILL SET DATA AVAILBE TO THE DOM THAT CAN BE PULLED ELSEWHERE
        document
          .getElementById("canvas-container")
          .setAttribute("data-percent", percentage);
        document
          .getElementById("canvas-container")
          .setAttribute("data-frame", frameIndex);
        //------------------------------
        // ENSURES FRAMES WON'T GO NEGATIVE AND ERROR
        if (frameIndex <= 0) frameIndex = 0;
        // ENSURES VIDEO TRIGGER WON'T PLAY PAST CERTANIN POINT
        if (frameIndex >= frames.length) return;
        //
        //
        console.log(percentage, "PERCENTAGE", frameIndex, "FRAME");
        //
        //
        // BUILDS NEWS FRAMES---------------
        window.requestAnimationFrame(() => {
          const canvas = containerName;
          const context = canvas.getContext("2d");
          if (frameIndex >= frames.length) {
            // !! IMPORT TO KEEP LAST FRAME OF MOVIE EVEN WHEN OFF SCREEN !!
            context.clearRect(0, 0, canvas.width, canvas.height);
            context.drawImage(frames[frames.length - 1], 0, 0);
            return;
          }
          // THIS IS ADDED TO DELETE OLD PNG AND ENSURE SMOOTH FRAME TRANSITION --- normal functionality
          context.clearRect(0, 0, canvas.width, canvas.height);
          // DRAWS NEW FRAME ----------------------------------
          context.drawImage(frames[frameIndex], 0, 0);
        });
      },
    };
    return observer;
  };
  return {
    create: create,
  };
})();