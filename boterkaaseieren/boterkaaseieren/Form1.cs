using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace boterkaaseieren
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
        bool player1turn = true;
        string click(Button b)
        {
            if (b.Text != "") return b.Text;
            if (player1turn)
            {

                player1turn = false;
                textBox1.Text = "player 2 is aan de BEURT nu!!!";
                return "x";
            }
            else
            {

                player1turn = true;
                textBox1.Text = "player 1 is aan de BEURT nu!!!";
                return "o";
            }

        }
        void check()
        {
            string[,] board = new string[3, 3];
            board[0, 0] = button1.Text;
            board[1, 0] = button2.Text;
            board[2, 0] = button3.Text;
            board[0, 1] = button4.Text;
            board[1, 1] = button5.Text;
            board[2, 1] = button6.Text;
            board[0, 2] = button7.Text;
            board[1, 2] = button8.Text;
            board[2, 2] = button9.Text;

            if (board[0, 0] == board[1, 0] && board[1, 0] == board[2, 0] && board[0, 0] != "") { MessageBox.Show("winner je krijg geen chicken als dinner: " + board[0, 0]); resetboard(); }
            if (board[0, 1] == board[1, 1] && board[1, 1] == board[2, 1] && board[0, 1] != "") { MessageBox.Show("winner je krijg geen chicken als dinner: " + board[0, 1]); resetboard(); }
            if (board[0, 2] == board[1, 2] && board[1, 2] == board[2, 2] && board[0, 2] != "") { MessageBox.Show("winner je krijg geen chicken als dinner: " + board[0, 2]); resetboard(); }
            if (board[0, 0] == board[0, 1] && board[0, 2] == board[0, 1] && board[0, 1] != "") { MessageBox.Show("winner je krijg geen chicken als dinner: " + board[0, 1]); resetboard(); }
            if (board[1, 0] == board[1, 1] && board[1, 2] == board[1, 1] && board[1, 1] != "") { MessageBox.Show("winner je krijg geen chicken als dinner: " + board[1, 1]); resetboard(); }
            if (board[2, 0] == board[2, 1] && board[2, 1] == board[2, 2] && board[2, 1] != "") { MessageBox.Show("winner je krijg geen chicken als dinner: " + board[2, 1]); resetboard(); }
            if (board[0, 0] == board[1, 1] && board[1, 1] == board[2, 2] && board[1, 1] != "") { MessageBox.Show("winner je krijg geen chicken als dinner: " + board[1, 1]); resetboard(); }
            if (board[2, 0] == board[1, 1] && board[0, 2] == board[1, 1] && board[1, 1] != "") { MessageBox.Show("winner je krijg geen chicken als dinner: " + board[1, 1]); resetboard(); }

        }
        void resetboard()
        {
            foreach (var button in this.Controls.OfType<Button>())
            {
                button.Text = "";
            }
        }
        private void button1_Click(object sender, EventArgs e)
        {
            button1.Text = click(button1);
            check();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            button2.Text = click(button1);
            check();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            button3.Text = click(button1);
            check();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            button4.Text = click(button1);
            check();
        }

        private void button5_Click(object sender, EventArgs e)
        {
            button5.Text = click(button1);
            check();
        }

        private void button6_Click(object sender, EventArgs e)
        {
            button6.Text = click(button1);
            check();
        }

        private void button7_Click(object sender, EventArgs e)
        {
            button7.Text = click(button1);
            check();
        }

        private void button8_Click(object sender, EventArgs e)
        {
            button8.Text = click(button1);
            check();
        }

        private void button9_Click(object sender, EventArgs e)
        {
            button9.Text = click(button1);
            check();
        }
    }
}





