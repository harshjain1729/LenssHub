function getBotResponse(input) {
    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }

    // Simple responses
    if (input == "hello"||input == "hi") {
        return "Hello there!";
    }
    else if (input == "I love LenssHub!") {
        return "Thanks❤️!";
    }
    else if (input == "can you help me in finding some good frames?") {
        return "Yes sure, You can checkout our Cossandra, Transparenta and Platar frames.";
    }
    else if (input == "can you help me in finding some good Sunglasses") {
        return "Yes sure, You can checkout our Platar frames.";
    }
    else if (input == "buy eyewear"||input == "buy glasses"||input == "buy specs") {
        return "Thanks for choosing LenssHub! We have many variety of glasses like COSSANDRA, TRASPARENTA and we also have PLATAR in sunglasses. What do you want to buy?";
    }
    
    else if (input == "sunglasses") {
        return "Yes sure, You can checkout our ravishing PLATAR frames.";
    }
    else if (input == "eyeglasses"||input == "normal glasses"||input == "glasses") {
        return "Yes sure, You can checkout our COSSANDRA and TRANSPARENTA frames.";
    }
    
    else if (input == "bye") {
        return "Talk to you later!";
    } else {
        return "Try asking something else!";
    }
}