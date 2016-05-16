package autoprintaddress;


import java.awt.Robot;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author itget
 */
public class AutoPrintAddress {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        try {
            
            for(int k = 1;k<=1;k=k+1){
                
            Runtime rt = Runtime.getRuntime();
            Process pr = rt.exec("start chrome  \"http://localhost/a4schollname/?sec="+k+"\"");
            Robot robot = new Robot();

        //Simulate a mouse click
      // robot.mousePress(InputEvent.BUTTON1_MASK);
       //robot.mouseRelease(InputEvent.BUTTON1_MASK);

            Thread.sleep(2000);
            
            
            
            }
        }catch(Exception e){
        }
    }
    
}
