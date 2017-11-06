/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ScHW_Sync;

/**
 *
 * @author chandan_shastri
 */

     import java.util.Scanner;
import javax.swing.JFrame;
import javax.swing.JSlider;
import j.extensions.comm.*;
 
public class ScHW_Sync_X {
 
        public static void main(String[] args) {
                // create a window with a slider
                JFrame window = new JFrame();
                JSlider slider = new JSlider();
                slider.setMaximum(1023);
                window.add(slider);
                window.pack();
                window.setVisible(true);
               
                // determine which serial port to use
                SerialComm ports[] = SerialComm.getCommPorts();
                System.out.println("Select a port:");
                int i = 1;
                for(SerialComm port : ports) {
                        System.out.println(i++ + ". " + port.getSystemPortName());
                }
                Scanner s = new Scanner(System.in);
                int chosenPort = s.nextInt();

                // open and configure the port
                SerialComm port = ports[chosenPort - 1];
                if(port.openPort()) {
                        System.out.println("Successfully opened the port.");
                } else {
                        System.out.println("Unable to open the port.");
                        return;
                }
                port.setComPortTimeouts(SerialComm.TIMEOUT_READ_SEMI_BLOCKING, 0, 0);
               
                // enter into an infinite loop that reads from the port and updates the GUI
                Scanner data = new Scanner(port.getInputStream());
                while(data.hasNextLine()) {
                        int number = 0;
                        try{number = Integer.parseInt(data.nextLine());}catch(Exception e){}
                        slider.setValue(number);
                }
        }

}


